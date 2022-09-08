<?php
require_once __DIR__ . '/vendor/autoload.php';
session_start();
include 'connect.php';
// include('THSplitLib/segment.php');

if (!isset($_SESSION['user_id']) && $_SESSION['user_id'] != "") {
    header('location:../login.php');
    exit();
} else if (!isset($_GET['pcode'])) {
    // header('location: checklist.php');
    exit();
} else {
    $str_sql_user = "SELECT * FROM personnel_tb WHERE psnID = '" . $_SESSION['user_id'] . "'";
    $obj_rs_user = mysqli_query($obj_con, $str_sql_user);
    $obj_row_user = mysqli_fetch_array($obj_rs_user);
    $user_name = $obj_row_user["psnNameEN"];
    $user_firstname = $obj_row_user["psnSurnameEN"];
    $user_firstname = strtolower($user_firstname);
    $firstlastname = substr($user_firstname, 0, 1);
    $user_name = $user_name . '.' . $firstlastname;

    $pcode = $_GET["pcode"];
    $id_doc = $_GET["id_doc"];
    $rev = $_GET["rev"];
}




// คิวรี่ Revision title
$str_sql_revision = "SELECT * FROM checklist_doc_title WHERE proj_code = '" . $pcode . "' AND id_doc = '" . $id_doc . "' AND rev = '$rev'";
$obj_rs_revision = mysqli_query($obj_con, $str_sql_revision) or die("Error in query : $str_sql_revision " . mysqli_error($obj_con));
$obj_row_revision = mysqli_fetch_array($obj_rs_revision);
$submit = $obj_row_revision["submit"];
$date = $obj_row_revision["date_create"];
$t_id = $obj_row_revision['t_id'];
$owner = $obj_row_revision['owner'];
$id_doc = $obj_row_revision['id_doc'];
$review_drawing = $obj_row_revision['review_drawing'];
$materials = $obj_row_revision['materials'];
$upby = $obj_row_revision['upby'];

//select document_name
$select_cate = "SELECT * FROM checklist_doc_category WHERE id_doc = '$id_doc'";
$run_cate = mysqli_query($obj_con, $select_cate) or die("Error in query : $select_cate " . mysqli_error($obj_con));
$row_cate = mysqli_fetch_array($run_cate);
$doc_name = $row_cate['doc'];

// ******************************************************************************************************

$select_pdf = "SELECT * FROM checklist_pdf WHERE proj_id = '$pcode' AND t_id = '$t_id'";
$run_pdf = mysqli_query($obj_con, $select_pdf) or die("Error in query $select_pdf " . mysqli_error($obj_con));
$num_pdf = mysqli_num_rows($run_pdf);

// //insert pdf data หากยังไม่เคยมีเอกสารในโปรเจคนี้มาก่อน
if ($num_pdf == 0) {
    // $name = "Checklist ".$doc_name."".$rev."_[1].pdf";
    $date_pdf = date('Y-m-d');
    if ($submit == '1') { //ถ้า status เอกสารเป็น submit
        $name = 'Checklist - ' . $pcode . ' - ' . $doc_name . ' - REV.' . $rev . ' (' . date('d-m-Y', strtotime($date_pdf)) . ').pdf'; //ชื่อไฟล์ลงวันที่ และไม่มี code draft
        $insert_pdf = "INSERT INTO `checklist_pdf`(`code`, `name`, `rev`, `draft`, `date`, `user_export`, `proj_id`, `t_id`,`id_doc`) VALUES (0,'$name','$rev','$submit','$date_pdf','" . $_SESSION['user_id'] . "','$pcode','$t_id','$id_doc')"; // insert submit pdf
    } else {
        $name = 'Checklist - ' . $pcode . ' - ' . $doc_name . ' - REV.' . $rev . '_[Draft1].pdf'; //ชื่อไฟล์ draft ไฟล์ที่  1
        $insert_pdf = "INSERT INTO `checklist_pdf`(`code`, `name`, `rev`, `draft`, `date`, `user_export`, `proj_id`, `t_id`,`id_doc`) VALUES ('1','$name','$rev','$submit','$date_pdf','" . $_SESSION['user_id'] . "','$pcode','$t_id','$id_doc')"; //insert draft pdf
    }
    // $name = 'Checklist - P20001 - Overall-AR - REV.0 (25-02-2022)_[1].pdf';
    $select_insert = "SELECT * FROM checklist_pdf WHERE name='$name'";
    $run_select_insert = mysqli_query($obj_con, $select_insert) or die("Error in query : $select_insert" . mysqli_error($obj_con));
    $num_insert = mysqli_num_rows($run_select_insert);
    if ($num_insert == 0) {
        mysqli_query($obj_con, $insert_pdf) or die("Error in query $insert_pdf" . mysqli_error($obj_con));
    }
    mysqli_query($obj_con, $insert_pdf) or die("Error in query $insert_pdf" . mysqli_error($obj_con));
} else {
    //กรณีเคยมีเอกสารในโปรเจคนี้มาแล้ว
    $date_pdf = date('Y-m-d');
    $select_lastpdf = "SELECT MAX(code) FROM checklist_pdf WHERE proj_id='$pcode' AND t_id='$t_id'"; //เลือก max code
    $run_lastpdf = mysqli_query($obj_con, $select_lastpdf) or die("Error in query : $select_lastpdf " . mysqli_error($obj_con));
    $row_lastpdf = mysqli_fetch_array($run_lastpdf);
    $code = $row_lastpdf[0];
    if ($code == "0") { // หาก max code ที่เลือกมาเป็นว่าง new code จะต้องเป็น 1
        $new_code = "1";
    } else { // หากไม่ว่าง ให้เอา max code ที่ select ได้ มาบวก 1 เป็น new code
        $code = intval($code);
        $new_code = ($code + 1);
    }
    if ($submit == '1') { //หากเป็น submit pdf
        //เลือกข้อมูลที่ต้องการลบจากโฟลเดอร์
        $select_del = "SELECT * FROM checklist_pdf WHERE draft = 0 AND proj_id = '$pcode' AND t_id = '$t_id'";
        $run_select_del = mysqli_query($obj_con, $select_del) or die("Error in query $select_del " . mysqli_error($obj_con));
        while ($row_del = mysqli_fetch_array($run_select_del)) {
            $dir = 'print-checklist/' . $row_del['name'];
            unlink($dir); //วนลบทีละไฟล์
        }

        //ลบ draft pdf เอกสารของโปรเจคนี้ทั้งหมด
        $delete_pdf = "DELETE FROM checklist_pdf WHERE draft = 0 AND proj_id = '$pcode' AND t_id = '$t_id'";
        mysqli_query($obj_con, $delete_pdf) or die("Error in query : $delete_pdf " . mysqli_error($obj_con));

        //insert submit pdf
        $name = 'Checklist - ' . $pcode . ' - ' . $doc_name . ' - REV.' . $rev . ' (' . date('d-m-Y', strtotime($date_pdf)) . ').pdf';
        $insert_pdf = "INSERT INTO `checklist_pdf`(`code`, `name`, `rev`, `draft`, `date`, `user_export`, `proj_id`, `t_id`,`id_doc`) VALUES (0,'$name','$rev','$submit','$date_pdf','" . $_SESSION['user_id'] . "','$pcode','$t_id','$id_doc')";
        $select_insert = "SELECT * FROM checklist_pdf WHERE name='$name'";
        $run_select_insert = mysqli_query($obj_con, $select_insert) or die("Error in query : $select_insert" . mysqli_error($obj_con));
        $num_insert = mysqli_num_rows($run_select_insert);
        if ($num_insert == 0) {
            mysqli_query($obj_con, $insert_pdf) or die("Error in query $insert_pdf" . mysqli_error($obj_con));
        }
    } else { //หากเป็น draft pdf 
        // insert draft pdf new code
        $name = 'Checklist - ' . $pcode . ' - ' . $doc_name . ' - REV.' . $rev . '_[Draft' . $new_code . '].pdf';
        $insert_pdf = "INSERT INTO `checklist_pdf`(`code`, `name`, `rev`, `draft`, `date`, `user_export`, `proj_id`, `t_id`,`id_doc`) VALUES ('$new_code','$name','$rev','$submit','$date_pdf','" . $_SESSION['user_id'] . "','$pcode','$t_id','$id_doc')";
        mysqli_query($obj_con, $insert_pdf) or die("Error in query $insert_pdf" . mysqli_error($obj_con));
    }
}

// ******************************************************************************************************

$path = "print-checklist/" . $name;
// echo $path;

// คิวรี่ Projects
$str_sql_pcode = "SELECT * FROM projects_tb 
                    INNER JOIN owners_tb ON (projects_tb.proj_owner = owners_tb.own_code) 
                    INNER JOIN buildtype_tb ON (projects_tb.proj_buildtype = buildtype_tb.bt_code) 
                    WHERE proj_code = '" . $pcode . "'";
$obj_rs_pcode = mysqli_query($obj_con, $str_sql_pcode);
$obj_row_pcode = mysqli_fetch_array($obj_rs_pcode);
$project_type = $obj_row_pcode['bt_name'];

// $str_sql_pcode = "SELECT * FROM projects_tb 
//                     LEFT JOIN owners_tb ON (projects_tb.proj_owner = owners_tb.own_code) 
//                     LEFT JOIN buildtype_tb ON (projects_tb.proj_buildtype = buildtype_tb.bt_code) 
//                     WHERE proj_code = '".$_GET['pcode']."'";
//     $obj_rs_pcode = mysqli_query($obj_con, $str_sql_pcode);
//     $obj_row_pcode = mysqli_fetch_array($obj_rs_pcode);

// $proj_buildtype = $obj_row_pcode["bt_name"];

// Create new PDF
$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
$fontDirs = $defaultConfig['fontDir'];

$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];

$mpdf = new \Mpdf\Mpdf([
    'fontDir' => array_merge($fontDirs, [
        __DIR__ . '/ttfonts',
    ]),
    'fontdata' => $fontData + [
        'sarabun' => [
            'R' => 'THSarabunNew.ttf',
            'I' => 'THSarabunNewItalic.ttf',
            'B' =>  'THSarabunNewBold.ttf',
            'BI' => "THSarabunNewBoldItalic.ttf",
        ],
        'seguisym' => [
            'R' => 'seguisym.ttf',
            'I' => 'seguisym.ttf',
            'B' =>  'seguisym.ttf',
            'BI' => "seguisym.ttf",
        ]

    ],
    'default_font' => 'sarabun'
]);
// $mpdf->showImageErrors = true;

$headChkl = array(
    'odd' => array(
        'L' => array(
            'content' => '<img src="img/ACSI_logo1.png" width="15%">',
            'font-size' => 8,
            'font-style' => 'L',
            'font-family' => 'sarabun',
            'color' => '#000000'
        ),

        'R' => array(
            'content' => '' . $doc_name . '',
            'font-size' => 14,
            'font-style' => 'B',
            'font-family' => 'sarabun',
            'color' => '#000000'
        ),
        'line' => 1,
    ),
    'even' => array(
        'L' => array(
            'content' => '<img src="img/ACSI_logo1.png" width="15%">',
            'font-size' => 8,
            'font-style' => 'L',
            'font-family' => 'sarabun',
            'color' => '#000000'
        ),

        'R' => array(
            'content' => '' . $doc_name . '',
            'font-size' => 14,
            'font-style' => 'B',
            'font-family' => 'sarabun',
            'color' => '#000000'
        ),
        'line' => 1,
    )
);


$footerChkl = array(
    'odd' => array(
        'L' => array(
            'content' => 'Controlled Form: Rev.' . $rev . ' (' . date('d/m/Y', strtotime($date)) . ')',
            'font-size' => 8,
            'font-style' => 'L',
            'font-family' => 'cordia',
            'color' => '#000000'
        ),
        'C' => array(
            'content' => '',
            'font-size' => 8,
            'font-style' => 'L',
            'font-family' => 'cordia',
            'color' => '#000000'
        ),
        'R' => array(
            'content' => 'Page {PAGENO} of {nbpg}',
            'font-size' => 8,
            'font-style' => 'L',
            'font-family' => 'cordia',
            'color' => '#000000'
        ),
        'line' => 1,
    ),
    'even' => array()
);

$footer = '<table width="100%" style="border: none">
<tr>
<td align="left" width="33%" style="border: none">Controlled Form: Rev.' . $rev . ' (' . date('d/m/Y', strtotime($date)) . ')</td>
<td align="right" width="33%" style="border: none">{PAGENO} of {nb}</td>
</tr>
</table>';
$header = '
<table class="table mt-3 mb-1" cellspacing="0" style="margin: 0px;">
    <tbody>
        <tr style="background-color: #FFF;">
            <td width="20%" style="border: none!important; padding: 0px;">
                <img src="https://acsi.co.th/admin/img/ACSI_logo1.png" width="19%" >
            </td>
            <td width="70%" align="right" style="border: none!important; color: #000; padding: 0px; vertical-align: middle;">
                <p class="mb-0" style="font-size: 20px; font-weight: bold;font-family:Tahoma;">
                ' . $doc_name . '</p>
            </td>
        </tr>
    </tbody>
</table>
';

ob_start(); // Start get HTML code 
?>
<!DOCTYPE html>
<html>

<head>
    <title>PDF</title>
    <link href="https://fonts.googleapis.com/css?family=Sarabun&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: sarabun;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #000000;
            text-align: left;
            padding: 8px;
        }

        .x {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 5px;
        }

        .a {
            border: 1px solid #ffffff;
            text-align: left;
            padding: 5px;
        }

        .y {

            border-right: none;
            /* background-color: red; */
            /* border-right: none ; */
            /* vertical-align: middle; */
        }

        .z {
            border-left: none;
            /* text-align: left; */
            /* padding: 5px; */
        }
    </style>
</head>

<body>
    <table class="table table-bordered" cellspacing="0">
        <tr>
            <td class="y" style="font-size:20px;vertical-align:top;" width="10%"><b>Project : </b></td>
            <td class="z" style="font-size:20px;vertical-align:top;" width="35%"><?= $obj_row_pcode['proj_name']; ?></td>

            <td style="font-size:20px;vertical-align:top;"><b>Revision : </b> &nbsp;<?= $rev ?></td>
            <td style="font-size:20px;vertical-align:top;"><b>Date : </b> &nbsp;<?= $date ?></td>
            <td style="font-size:20px;vertical-align:top;"><b>Prepared by : </b> &nbsp;<?= $upby ?></td>
        </tr>
        <tr>
            <td class="y" style="font-size:20px;"><b>Owner : </b></td>
            <td class="z" style="font-size:20px;">
                <?php echo $owner ?>
            </td>
            <td colspan="3" style="font-size:20px;"><b>Project Type : </b> &nbsp;<?php echo $project_type ?></td>

        </tr>
        <tr>
            <td colspan="5" style="padding:0px;">
                <table class="table-borderless" width="100%" style="font-size:13px;border: none;">
                    <tr>
                        <td style="text-align:left;border-left:none;border-top:none;border-bottom:none;font-size:20px;" width="45%">
                            <!-- <td style="text-align:left;" > -->
                            <b style="color: black;">REVIEWED DRAWINGS : </b>
                            &nbsp;
                            <?php echo $review_drawing ?>
                        </td>
                        <td style="text-align:left;padding-left:10px;border-right:none;border-top:none;border-bottom:none;font-size:20px;">
                            <div class="row">
                                <b style="color: black;">MATERIALS : </b>&nbsp;
                                <span>
                                    <?php echo $materials ?>
                                </span>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="5" bgcolor="#dddddd">
                <table class="table-borderless" width="100%" style="font-size:13px;border: none;">
                    <tbody>
                        <tr>
                            <td style="color:black;font-weight:bold;" class="x">CATEGORY : </td>
                            <td style="color:black;text-align:left;font-weight:bold;" class="x">
                                "A" = Not acceptable (immediate resolving and resubmission required)
                            </td>
                            <td style="color:black;text-align:left;font-weight:bold;" class="x">
                                "B" = Addendum required (will be submitted prior to proceed to next stage)
                            </td>
                        </tr>
                        <tr>
                            <td class="x"></td>
                            <td style="color:black;text-align:left;font-weight:bold;" class="x">
                                "C" = Minor comment (will be incorporated in next stage / issue)
                            </td>
                            <td style="color:black;text-align:left;font-weight:bold;" class="x">
                                "D" = Rediscuss required (will be discussed as soon as possible)
                            </td>
                        </tr>
                    </tbody>
                </table>

            </td>
        </tr>
    </table>
    <!-- <table class="table table-bordered" cellspacing="0">
        <tbody>
            <tr>
                <td width="15%" bgcolor="white" rowspan="2" class="align-middle y">
                    <img src="img/ACSI_logo1.png" style="width:200px">

                </td>
                <td width="35%" style="text-align:right;" class="z" rowspan="2">
                    <b style="color:black;font-size:26px;">ACSI'S STANDARD <br> DESIGN CHECKLIST (SDC)</b>

                </td>

                </td>
                <td width="25%" style="text-align:left">
                    <b style="color: black;">PROJECT : </b>
                    &nbsp;&nbsp;&nbsp;<?= $obj_row_pcode['proj_name']; ?>
                </td>
                <td width="25%" style="text-align:center">
                    <b style="color: black;">DESCIPLINE </b>
                </td>
            </tr>
            <tr>
                <td style="text-align:left;">
                    <div class="row">
                        <b style="color: black;">OWNER : </b>&nbsp;
                        <span>
                            <?php echo $owner ?>
                        </span>
                    </div>
                </td>
                <td style="text-align:center;">
                    <?php echo $doc_name ?>
                </td>
            </tr>
            <tr>
                <td style="text-align:left;" colspan="2">
                    <b style="color: black;">REVIEWED DRAWINGS : </b>

                </td>
                <td>
                    <?php echo $review_drawing ?>
                <td style="text-align:left;padding-left:10px;">
                    <div class="row">
                        <b style="color: black;">MATERIALS : </b>&nbsp;
                        <span>
                            <?php echo $materials ?>
                        </span>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="4" bgcolor="#dddddd">
                    <table class="table-borderless" width="100%" style="font-size:13px;border: none;">
                        <tbody>
                            <tr>
                                <td style="color:black;font-weight:bold;" class="x">CATEGORY : </td>
                                <td style="color:black;text-align:left;font-weight:bold;" class="x">
                                    "A" = Not acceptable (immediate resolving and resubmission required)
                                </td>
                                <td style="color:black;text-align:left;font-weight:bold;" class="x">
                                    "B" = Addendum required (will be submitted prior to proceed to next stage)
                                </td>
                            </tr>
                            <tr>
                                <td class="x"></td>
                                <td style="color:black;text-align:left;font-weight:bold;" class="x">
                                    "C" = Minor comment (will be incorporated in next stage / issue)
                                </td>
                                <td style="color:black;text-align:left;font-weight:bold;" class="x">
                                    "D" = Rediscuss required (will be discussed as soon as possible)
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </td>
            </tr>
        </tbody>
    </table> -->
    <table class="table table-bordered" cellspacing="0">
        <thead>

            <tr bgcolor="#DDD9C4">
                <th rowspan="2" style="width:5%;text-align:center;font-size:20px;">No</th>
                <th colspan="2" style="text-align:center;font-size:20px;">REQUIREMENTS</th>
                <th colspan="3" style="text-align:center;font-size:20px;">CHECK OF DRAWING & DOCUMENTS </th>
                <!-- <th colspan="3"></th> -->
            </tr>
            <tr bgcolor="#DDD9C4">
                <th style="font-size:20px;width:40%;text-align:center;">DESCRIPTION</th>
                <th style="font-size:20px;width:15%;text-align:center;">REMARK</th>
                <th style="font-size:20px;width:7%;text-align:center;">DWG./DOC.</th>
                <th style="font-size:20px;width:23%;text-align:center;">UPDATE STATUS</th>
                <th style="font-size:20px;width:10%;text-align:center;">CATEGORY</th>
                <!-- <th style="font-size:20px;width:8%;">SC - DD</th>
									<th style="font-size:20px;">Detail Drawing</th>
									<th style="font-size:20px;">Cost Related</th> -->
            </tr>
        </thead>

        <tbody>
            <?php
            $select_head = "SELECT * FROM checklist_head WHERE id_doc = '$id_doc'";
            $run_head = mysqli_query($obj_con, $select_head) or die("Error in query $select_head " . mysqli_error($obj_con));
            while ($row_head = mysqli_fetch_array($run_head)) { ?>
                <tr>
                    <td colspan="9" bgcolor="#dddddd" style="text-align:left;font-weight:bolder;font-size:18px;">
                        <b><?php echo $row_head['h_description'] ?></b>
                    </td>
                </tr>
                <?php
                $select_detail = "SELECT * FROM checklist_detail WHERE h_id = '" . $row_head['h_id'] . "'  ORDER BY 1*SUBSTRING_INDEX(sort, '.', 1) ASC ";
                $run_detail = mysqli_query($obj_con, $select_detail) or die("Error in query $select_detail " . mysqli_error($obj_con));
                while ($row_detail = mysqli_fetch_array($run_detail)) {
                    $d_id = $row_detail['d_id'];
                    $h_id = $row_detail['h_id'];

                    $select_item = "SELECT * FROM checklist_check_item WHERE d_id = '$d_id' AND h_id='$h_id' AND id_doc = '$id_doc' AND proj_code = '$pcode' AND rev = '$rev'";
                    $run_item = mysqli_query($obj_con, $select_item) or die("Error in query $select_item " . mysqli_error($obj_con));
                    $row_item = mysqli_fetch_array($run_item);
                    $num_item = mysqli_num_rows($run_item);

                    $remark = $row_detail['remark'];
                    $dwg = $row_item['dwg'];
                    $update_status = $row_item['update_status'];
                    $scdd = $row_item['scdd'];
                    $detail_drawing = $row_item['detail_drawing'];
                    $cost_related = $row_item['cost_related'];
                    $category = $row_item['category'];
                    if ($category == null || $category == '') {
                        $category = 'xxx';
                    }
                ?>
                    <tr>
                        <td style="text-align:center;vertical-align:top;font-size:18px;">
                            <?php echo $row_detail['sort'] ?>
                        </td>
                        <td style="text-align:left;vertical-align:top;font-size:18px;">
                            <?php echo $row_detail['d_description'] ?>
                            <?php
                            $sql_img = "SELECT * FROM checklist_detail_img WHERE d_id = '$d_id'";
                            $run_img = mysqli_query($obj_con, $sql_img) or die("Error in query : $sql_img" . mysqli_error($obj_con));
                            $num_img = mysqli_num_rows($run_img);
                            if ($num_img != 0) {
                                $row_img = mysqli_fetch_array($run_img);
                                $folder = $row_img['folder'];
                                $filename = $row_img['filename'];
                                if ($folder != '' && $filename != '') {

                            ?>
                                    <br>
                                    <img src="<?php echo $folder . "/" . $filename; ?>" border="0" width="100px" />
                            <?php
                                }
                            }
                            ?>
                        </td>
                        <td style="vertical-align:top;font-size:18px;">
                            <?php echo $remark ?>
                        </td>
                        <td style="vertical-align:top;font-size:18px;">
                            <?= $dwg ?>
                        </td>
                        <td style="vertical-align:top;font-size:18px;">
                            <?= $update_status ?>
                        </td>
                        <td style="vertical-align:top;text-align:center;font-size:18px;">
                            <?php
                            if ($category == "xxx") {
                                echo "";
                            } else {
                                echo $category;
                            }
                            // switch ($category) {

                            //     case 'A':
                            //         echo "Not acceptable";
                            //         break;
                            //     case 'B':
                            //         echo "Addendum required";
                            //         break;
                            //     case 'C':
                            //         echo "Minor comment";
                            //         break;
                            //     case 'D':
                            //         echo "Rediscuss required ";
                            //         break;
                            // }

                            ?>
                        </td>
                        <!-- <td>
												<?php
                                                if ($scdd == 'on') {
                                                    $scdd_check = "checked";
                                                } else {
                                                    $scdd_check = "";
                                                }
                                                ?>
												<input type="checkbox" name="scdd" id="scdd<?= $d_id ?>" onchange="update_checklist(<?= $d_id ?> ,<?= $h_id ?> ,<?= $id_code ?>,<?= $id_title ?>,this.name,this.value)" <?= $scdd_check ?> >
											</td>
											<td>
												<?php
                                                if ($detail_drawing == 'on') {
                                                    $dd_check = "checked";
                                                } else {
                                                    $dd_check = "";
                                                }
                                                ?>
												<input type="checkbox" name="detail_drawing" id="detail_drawing<?= $d_id ?>" onchange="update_checklist(<?= $d_id ?> ,<?= $h_id ?> ,<?= $id_code ?>,<?= $id_title ?>,this.name,this.value)" <?= $dd_check ?> >
											</td>
											<td>
												<?php
                                                if ($cost_related == 'on') {
                                                    $cl_check = "checked";
                                                } else {
                                                    $cl_check = "";
                                                }
                                                ?>
												<input type="checkbox" name="cost_related" id="cost_related<?= $d_id ?>" onchange="update_checklist(<?= $d_id ?> ,<?= $h_id ?> ,<?= $id_code ?>,<?= $id_title ?>,this.name,this.value)" <?= $cl_check ?> >
											</td> -->
                    </tr>
            <?php }
            }
            ?>
        </tbody>

    </table>
</body>

</html>
<?php
$html = ob_get_contents(); // ทำการเก็บค่า HTML จากคำสั่ง ob_start()
$mpdf->SetHeader($header);
$mpdf->AddPage(
    'P', // L - landscape, P - portrait
    '',
    '',
    '',
    '',
    6, // margin_left
    6, // margin right
    30, // margin top
    20, // margin bottom
    6, // margin header
    6, // margin footer
    'A4'
);
$mpdf->SetFooter($footer);
if ($submit == '0') {
    $mpdf->SetWatermarkText('D R A F T');
    $mpdf->showWatermarkText = true;
}
$mpdf->SetTitle($doc_name);
$mpdf->WriteHTML($html);
// echo $viewChkl;

$mpdf->Output($path);
// $mpdf->Output("print-checklist/Checklist - P20001 - AUTOMATED CARPARK - REV.0 (26-04-2022).pdf");
// $mpdf->Output("x23.pdf");
// 'D': download the PDF file
// 'I': serves in-line to the browser

// $mpdf->Output();

//}
echo $path;
?>
<script langquage='javascript'>
    window.location = "<?= $path ?>";
    // window.open("<?= $path ?>","_blank");
</script>
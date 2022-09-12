/**
 * get Url Params
 * @param {string} param 
 * @returns 
 */
 function urlSearchParams(param) {
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    const resultParams = urlParams.get(param);
    return resultParams;
}
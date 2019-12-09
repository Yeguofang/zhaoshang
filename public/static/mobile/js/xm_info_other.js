
$(function () {
    if (sessionStorage.getItem('ProjectDetailsSecondaryNavigationIndex91')) {
        var ProjectDetailsSecondaryNavigationIndex91;
        ProjectDetailsSecondaryNavigationIndex91 = sessionStorage.getItem('ProjectDetailsSecondaryNavigationIndex91')
        console.log(ProjectDetailsSecondaryNavigationIndex91)
        $('.item_jminfo .tabs-tit li').eq(ProjectDetailsSecondaryNavigationIndex91).click()
        sessionStorage.removeItem('ProjectDetailsSecondaryNavigationIndex91')
    }
})
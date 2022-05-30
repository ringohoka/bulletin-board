{
    const DOC = document;
    const NAVIWRAP = DOC.querySelector('#subject-wrap');
    const CATENAVI = DOC.querySelector('#category-navi');
    const NAVITOP = NAVIWRAP.offsetTop;

    window.onscroll = (event) =>{
        let posY = DOC.documentElement.scrollTop;
        CATENAVI.getElementsByClassName.top=(posY >= NAVITOP)? `${posY}px` :0 ;
    }
}
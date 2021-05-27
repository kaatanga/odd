function xss(){
const urlParams = new URLSearchParams(window.location.search);
const myParam = urlParams.get('app');
document.getElementById('asset').action = "DEFAULT.php"
    
}

function xss2(){
const urlParams = new URLSearchParams(window.location.search);
const myParam = urlParams.get('app');
document.getElementById('asset').action = "DEFAULT_2.php"
    
}
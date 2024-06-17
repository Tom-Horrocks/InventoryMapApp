


function refresh() {
    $('.accordion').on('shown hidden', function () {
        $('body').scrollspy('refresh');
    });
};

function displayName(name) {
    document.getElementById('id-name').firstChild.data = name;
    
}

function cookiealert() {
    let x = document.cookie;
    alert(x);
}

function setsvgid() {
    let x = document.cookie;
    document.getElementById("formsvgid").value = x;
}

function reloadadd() {

    document.getElementById('iframe').src = document.getElementById('iframe').src;
    
}

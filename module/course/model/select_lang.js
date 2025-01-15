function selang(){
    console.log("hola selang js");
    // var button_select = document.getElementById('s_lang');
    var sel_lang=document.getElementById('fidioma');
    console.log(sel_lang.value);
    var form = document.getElementById('filters');
    form.action = `index.php?page=controller_course&op=sidioma&idioma=${sel_lang.value}`;
    // console.log(form.action);
    // var href = `index.php?page=controller_course&op=sidioma&idioma=${sel_lang.value}`;
    // console.log(href);
    // window.location.href = href;
    return true;
}
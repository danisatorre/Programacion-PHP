function selang(){
    // console.log("hola selang js");
    // return false
    var sel_lang=document.getElementById('fidioma');
    // console.log(sel_lang.value);
    // return false
    var form = document.getElementById('filters');
    // console.log(form);
    // return false
    form.action = `index.php?page=controller_course&op=sidioma&idioma=${sel_lang.value}`;
    form.submit();
    // console.log(form.action);
    // return false
    return true;
}
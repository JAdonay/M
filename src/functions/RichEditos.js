window.addEventListener('load',()=>{
    let output = document.getElementById('output');
    let buttons = document.getElementsByClassName('tool--btn');
    for (let btn of buttons) {
        btn.addEventListener('click', () => {
            let cmd = btn.dataset['command'];
            if(cmd === 'createlink') {
                let url = prompt("Enter the link here: ", "http:\/\/");
                document.execCommand(cmd, false, url);
            } else {
                document.execCommand(cmd, false, null);
            }
        })
    }
    document.getElementById('titleThreatInput').addEventListener('click',()=>{
        document.getElementById('richEditor').style.display="block";
    });
    document.getElementById('btn__discussion__Submit').addEventListener('click',()=>{
        var form=document.forms['form__thread'];
        console.log(form);
    });
})

let editor;

window.onload = function() {
    editor = ace.edit("editor");
    editor.setOptions({
  theme: 'ace/theme/gruvbox',
  mode: 'ace/mode/text',
  enableBasicAutocompletion: true,
  enableLiveAutocompletion: true,
  useElasticTabstops: true,

})
/*    editor.setTheme("ace/theme/Monokai");
    editor.session.setMode("ace/mode/c_cpp");*/
}


function changeLanguage() {

    let language = $("#languages").val();

    
     if(language == 'c' || language == 'cpp')editor.session.setMode("ace/mode/c_cpp");
    else if(language == 'php')editor.session.setMode("ace/mode/php");
    else if(language == 'python')editor.session.setMode("ace/mode/python");
    else if(language == 'node')editor.session.setMode("ace/mode/javascript");
    else if(language == 'text'){
        editor.session.setMode("ace/mode/text");
        editor.setValue("Editor is on notepad mode");
        editor.setShowInvisibles(true);
    }
}

function executeCode() {
    $.ajax({

        url: "/HashTag-Compiler/app/compiler.php",

        method: "POST",

        data: {
            language: $("#languages").val(),
            code: editor.getSession().getValue()
        },

        success: function(response) {
            $(".show").text(response)
             $("#exec").show();
            setTimeout(function(){
        $('#exec').fadeOut('fast');
    },1500)
        }
    })

}

function saveCode() {
    
    $.ajax({

        url: "/HashTag-Compiler/ui/codesaved.php",

        method: "POST",

        data: {
            language: $("#languages").val(),
            code: editor.getSession().getValue()
        },

        success: function() {
            $("#showingsave").show();
            setTimeout(function(){
        $('#showingsave').fadeOut('fast');
    },1500)
            $(".show").text("")
        }
    })
}

function clearCode() {
             $("#dom").show();
            setTimeout(function(){
        $('#dom').fadeOut('fast');
    },1500)
                
            editor.setValue("",0)
            $(".show").text("")
     }





function changetheme() {

    let theme = $("#theme").val();

    if(theme == 'Terminal')
{
        editor.setTheme("ace/theme/terminal");
        var element = document.getElementById("show");
        element.style.backgroundColor = "black";



    }
    else if(theme == 'Pastel Dark')
    {
        editor.setTheme("ace/theme/pastel_on_dark");

        var element = document.getElementById("show");
        element.style.backgroundColor = "#2C2828";
    }
    else if(theme == 'Dawn')
    {
        editor.setTheme("ace/theme/dawn");
        var element = document.getElementById("show");
        element.style.backgroundColor = "#F9F9F9";
        element.style.color = "black";
    }

    else if(theme == 'Twilight'){
        editor.setTheme("ace/theme/twilight");
        var element = document.getElementById("show");
        element.style.backgroundColor = "#141414";
    }

    else if(theme == 'gruvbox'){
        editor.setTheme("ace/theme/gruvbox");

        var element = document.getElementById("show");
        element.style.backgroundColor = "#1D2021";
    }
    else if(theme == 'Monokai'){
        editor.setTheme("ace/theme/monokai");
        var element = document.getElementById("show");
        element.style.backgroundColor = "#272822";
    }
    
}
function copyCode(){
    var text = editor.getCopyText()
editor.execCommand("copy") // or cut
navigator.clipboard.writeText(text)
}
function cutCode(){
    var text = editor.getCopyText()
editor.execCommand("cut") // or cut
navigator.clipboard.writeText(text)
}
function pasteCode(){
    navigator.clipboard.readText().then(function(text) {
    editor.execCommand("paste", text)
})
}

function undo(){
editor.getSession().getUndoManager().undo(false);
}
function redo(){
    editor.getSession().getUndoManager().redo(false);
}
function selectAll(){
    editor.selectAll();
}

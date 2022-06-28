const nameInput = document.querySelector("#name")
const email = document.querySelector("#email")
const message = document.querySelector("#message")
const message02 = document.querySelector("#message-02")
const success = document.querySelector("#success")
const tell = document.querySelector("#telefone")
const errorNodes = document.querySelectorAll(".error")
const cep = document.querySelector("#cep")


function validateForms(){

    clearMessages();
    let errorFlag = false;

    if(nameInput.value.length < 1){
        errorNodes[0].innerText = "Digite seu nome.";
        nameInput.classList.add("error-border");
        errorFlag = true;
    }
    
    if(!emailIsValid(email.value)){
        errorNodes[1].innerText = "Email inválido";
        email.classList.add("error-border");
        errorFlag = true;
    }

    if(tell.value.length <1){
        errorNodes[2].innerText = "Telefone inválido";
        tell.classList.add("error-border");
        errorFlag = true;
    }
    
    if(cep.value.length <1){
        errorNodes[3].innerText = "CEP inválido";
        cep.classList.add("error-border");
        errorFlag = true;
    }
    if(message.value.length <1){
        errorNodes[4].innerText = "Mensagem inválida";
        message.classList.add("error-border");
        errorFlag = true;
    }

    if(message02.value.length <1){
        errorNodes[5].innerText = "Mensagem inválida";
        message02.classList.add("error-border");
        errorFlag = true;
    }

    if(!errorFlag){
        success.innerText = "Enviado com sucesso!";
        alert("Enviado com sucesso!")
    }
}

/* Máscaras ER */
function mascara(o, f) {
    v_obj = o;
    v_fun = f;
    setTimeout("execmascara()", 1);
  }
  function execmascara() {
    v_obj.value = v_fun(v_obj.value);
  }
  function mtel(v) {
    v = v.replace(/\D/g, ""); //Remove tudo o que não é dígito
    v = v.replace(/^(\d{2})(\d)/g, "($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
    v = v.replace(/(\d)(\d{4})$/, "$1-$2"); //Coloca hífen entre o quarto e o quinto dígitos
    return v;
  }
  function id(el) {
    return document.getElementById(el);
  }
  window.onload = function () {
    id('telefone').onkeyup = function () {
      mascara(this, mtel);
    };
  };

document.querySelector(".hamburguer").addEventListener("click", () =>
    document.querySelector(".container").classList.toggle("show-menu")
);



function clearMessages(){
    for(let i = 0; i < errorNodes.length; i++){
        errorNodes[i].innerText = ""
    }
    nameInput.classList.remove("error-border");
    email.classList.remove("error-border");
    message.classList.remove("error-border");
    tell.classList.remove("error-border");
}

function emailIsValid(email){
    var pattern = /\S+@\S+\.\S+/;
    return pattern.test(email);
}

function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById('rua').value=("");
    document.getElementById('bairro').value=("");
    document.getElementById('cidade').value=("");
    document.getElementById('uf').value=("");
}

function meu_callback(conteudo) {
if (!("erro" in conteudo)) {
    //Atualiza os campos com os valores.
    document.getElementById('rua').value=(conteudo.logradouro);
    document.getElementById('bairro').value=(conteudo.bairro);
    document.getElementById('cidade').value=(conteudo.localidade);
    document.getElementById('uf').value=(conteudo.uf);
} //end if.
else {
    //CEP não Encontrado.
    limpa_formulário_cep();
    alert("CEP não encontrado.");
}
}

function pesquisacep(valor) {

//Nova variável "cep" somente com dígitos.
var cep = valor.replace(/\D/g, '');

//Verifica se campo cep possui valor informado.
if (cep != "") {

    //Expressão regular para validar o CEP.
    var validacep = /^[0-9]{8}$/;

    //Valida o formato do CEP.
    if(validacep.test(cep)) {

        document.getElementById('cep').value = cep.substring(0,5)
        +"-"
        +cep.substring(5);

        //Preenche os campos com "..." enquanto consulta webservice.
        document.getElementById('rua').value="...";
        document.getElementById('bairro').value="...";
        document.getElementById('cidade').value="...";
        document.getElementById('uf').value="...";

        //Cria um elemento javascript.
        var script = document.createElement('script');

        //Sincroniza com o callback.
        script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

        //Insere script no documento e carrega o conteúdo.
        document.body.appendChild(script);

    } //end if.
    else {
        //cep é inválido.
        limpa_formulário_cep();
        alert("Formato de CEP inválido.");
    }
} //end if.
else {
    //cep sem valor, limpa formulário.
    limpa_formulário_cep();
}
};


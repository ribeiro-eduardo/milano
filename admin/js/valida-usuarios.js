/**
 * Created by Eduardo Ribeiro on 11/04/2016.
 */

$('#submit').click(function() {
    var id_tipo_usuario = $.trim($('#id_tipo_usuario').val());
    var nome            = $.trim($('#nome').val());
    var cpf             = $.trim($('#cpf').val());
    var data_nascimento = $.trim($('#data_nascimento').val());
    var email           = $.trim($('#email').val());
    var login           = $.trim($('#login').val());
    var senha           = $.trim($('#senha').val());
    var telefone        = $.trim($('#telefone').val());
    var celular         = $.trim($('#celular').val());

    console.log(data_nascimento);

    if (id_tipo_usuario  === '') {
        alert('Por favor, selecione o tipo de usu�rio!');
        return false;
    }
    if (nome  === '') {
        alert('Por favor, preencha o nome do usu�rio!');
        return false;
    }
    if (cpf  === '') {
        alert('Por favor, preencha o cpf do usu�rio!');
        return false;
    }
    if (data_nascimento  === '') {
        alert('Por favor, preencha a data de nascimento do usu�rio!');
        return false;
    }
    if (email  === '') {
        alert('Por favor, preencha o email do usu�rio!');
        return false;
    }
    if (login  === '') {
        alert('Por favor, preencha o login do usu�rio!');
        return false;
    }
    if (senha  === '') {
        alert('Por favor, preencha a senha do usu�rio!');
        return false;
    }
    if (telefone  === '') {
        alert('Por favor, preencha o telefone do usu�rio!');
        return false;
    }
    if (celular  === '') {
        alert('Por favor, preencha o celular do usu�rio!');
        return false;
    }
});


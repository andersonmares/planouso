/**
 * Created by dimas.filho on 03/03/2016.
 */
var MSG_S001 = "Dados salvos com sucesso!";
var MSG_S002 = "Adesão Finalizada!";

var MSG_A001 = "Atenção, ao avançar esse passo, <strong>NÃO</strong> será permitido %s <p>Deseja confirmar e avançar esse passo?</p>";
var MSG_A002 = "Atenção, antes de avançar esse passo confira se o número de escolas foi selecionado corretamente. ";
var MSG_A003 = "Não é possível avançar esse passo!";
var MSG_A004 = "Selecione no mínimo 50% das escolas do grupo prioritárias.";
var MSG_A005 = "Selecione no mínimo 1 (uma) escola que tenha Creche, Pré escola ou Creche/Pré Escola do grupo de escolas prioritárias.";
var MSG_A006 = "Vincule no mínimo 1 (uma) equipe para cada escola.";
var MSG_A007 = "Antes de avançar, confira se os dados foram preenchidos corretamente!";
var MSG_A008 = "Atenção, confirme primeiro antes de avançar!";
var MSG_A009 = "Atenção, você não selecionou nenhuma equipe, vincule no mínimo 1 (uma) equipe para essa escola!";
var MSG_A010 = "Leia o termo até o final para confirmar!";
var MSG_A011 = "Atenção, ao avançar esse passo sua adesão será finalizada!<p>Deseja confirmar e avançar esse passo?</p>";
var MSG_A012 = "<p>O período de adesão ao PSE encerrou!</p>";
var MSG_A013 = "<p>Sua adesão ao %s foi finalizada, você não pode mais alterar os dados!</p>";
var MSG_A014 = "<p>Clique no botão \"Continuar Adesão\" para continuar o preenchimento da adesão!</p>";
var MSG_A015 = "<p>Não modifique o endereço/código da URL do sistema, isso pode gerar problemas em sua adesão. Se deseja continuar a adesão, clique no botão \"Continuar Adesão\" para voltar à adesão!</p>";
var MSG_A016 = "<p>Você não pode mais voltar à etapa %s! <br />Clique em OK, e aguarde que o sistema redirecionará a etapa atual da sua adesão!</p>";
var MSG_A017 = "<p>Você está prestes a sair da adesão do PSE, caso saia poderá continuar sua adesão da etapa que parou em um outro momento.<br> Você quer realmente fazer isso?</p>";
var MSG_A018 = "<p>Você está prestes a sair do cadastro de representantes.<br> Você quer realmente fazer isso?</p>";
var MSG_A019 = "<p>Para iniciar sua adesão é necessário cadastrar primeiro os representantes de saúde e educação do município, você será direcionado para o cadastro de representantes do" +
    " município.</p>";
var MSG_A020 = "<p>Seu municipio pode aderir à Agenda para Intensificação do Monitoramento e do Cuidado da Criança com Excesso de Peso!</p>";
var MSG_A021 = "Atenção, ao confirmar seu município %s da Agenda para Intensificação do Monitoramento e do Cuidado da Criança com Excesso de Peso<p>Deseja confirmar?</p>";
var MSG_A022 = "Atenção, ao confirmar sua decisão sobre o NutriSUS, você não poderá mudar depois.<p>Deseja confirmar?</p>";
var MSG_A023 = "Selecione um tipo de perfil e clique em OK!";
var MSG_A024 = '<span class="text-blue"><i class="fa fa-spin fa-refresh"></i> &nbsp;<strong>Por favor aguarde, o sistema está gerando a planilha... </strong>' +
'<br /><small>Essa ação pode demorar alguns minutos.</small></span>';

var MSG_E001 = "Ocorreu um erro ao salvar! Tente novamente mais tarde!";
var MSG_E002 = "Sua sessão expirou, você deve efetuar o login novamente, para acessar o sistema!";

msg = function (cod, complementoMsg) {
    var mensagem = eval("MSG_" + cod);
    if (complementoMsg !== undefined) {
        mensagem = sprintf(mensagem, complementoMsg);
    }
    return mensagem;
};

msgSucesso = function (cod) {
    return eval("MSG_S" + cod);
};

msgAlerta = function (cod, complementoMsg) {
    var mensagem = eval("MSG_A" + cod);
    if (complementoMsg !== undefined) {
        mensagem = sprintf(mensagem, complementoMsg);
    }
    return mensagem;
};

msgErro = function (cod) {
    return eval("MSG_E" + cod);
};
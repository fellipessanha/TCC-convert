<?php
$to1 = "conteudosdigitais@im.uff.br";
$to2 = "conteudos.digitais.uff@gmail.com";

$today = getdate(); 

$software = "Um Problema Geom�trico";

$textoweb = $_POST['textoweb'];
$sugestoesweb = $_POST['sugestoesweb'];
$uso = $_POST['uso'];
$nota = $_POST['nota'];

$rigor = $_POST['rigor'];
$interatividade = $_POST['interatividade'];
$linguagem = $_POST['linguagem'];
$contextualizacao = $_POST['contextualizacao'];
$experimentacao = $_POST['experimentacao'];
$alternativas = $_POST['alternativas'];
$layout = $_POST['layout'];
$dicas = $_POST['dicas'];
$navegacao = $_POST['navegacao'];
$mundoreal = $_POST['mundoreal'];
$interdisciplinaridade = $_POST['interdisciplinaridade'];

$nome = $_POST['nome'];
$e_mail = $_POST['e_mail'];
$localidade = $_POST['localidade'];
$conexao = $_POST['conexao'];
$atuacao = $_POST['atuacao'];
$categoria = $_POST['categoria'];
$instituicao = $_POST['instituicao'];


$navigator = $_POST['navigator'];
$version = $_POST['version'];
$platform = $_POST['platform'];
$resolution = $_POST['resolution'];
$java = $_POST['java'];


$from_header = "From: \"$nome\" <$e_mail>";
$subject = "Avalia��o do software ".$software." por ".$nome;

$contents = "Nome: ";
$contents .= $nome;
$contents .= "\n";
$contents .= "E-mail: ";
$contents .= $e_mail;
$contents .= "\n";
$contents .= "Localidade: ";
$contents .= $localidade;
$contents .= "\n";
$contents .= "Conex�o: ";
$contents .= $conexao;
$contents .= "\n";
$contents .= "Atua��o: ";
$contents .= $atuacao;
$contents .= "\n";
$contents .= "Categoria: ";
$contents .= $categoria;
$contents .= "\n";
$contents .= "Institui��o: ";
$contents .= $instituicao;
$contents .= "\n\n\n";


$contents .= "Data: ";
$contents .= $today[mday];
$contents .= "/";
$contents .= $today[mon];
$contents .= "/";
$contents .= $today[year];
$contents .= "\n\n\n";


$contents .= "Navegador: ";
$contents .= $navigator;
$contents .= "\n";
$contents .= "Vers�o: ";
$contents .= $version;
$contents .= "\n";
$contents .= "Plataforma: ";
$contents .= $platform;
$contents .= "\n";
$contents .= "Resolu��o: ";
$contents .= $resolution;
$contents .= "\n";
$contents .= "Java: ";
$contents .= $java;
$contents .= "\n\n\n";

$contents .= "Voc� acha que o texto usado na p�gina WEB est� claro? Em caso negativo, que modifica��es voc� acha que s�o necess�rias?\n";
$contents .= $textoweb;
$contents .= "\n\n";

$contents .= "Voc� tem alguma sugest�o de modifica��o no software ou na p�gina WEB?\n";
$contents .= $sugestoesweb;
$contents .= "\n\n";

$contents .= "Voc� apresentaria este software para seus alunos em sala de aula? Em caso afirmativo, para tratar sobre qual assunto do curr�culo escolar?\n";
$contents .= $uso;
$contents .= "\n\n";

$contents .= "D� uma nota de 0 (zero) a 10 (dez) para o software e, se poss�vel, justifique o porqu� de sua nota.\n";
$contents .= $nota;
$contents .= "\n\n\n";


$contents .= "Rigor: ";
$contents .= $rigor;
$contents .= "\n";
$contents .= "Interatividade: ";
$contents .= $interatividade;
$contents .= "\n";
$contents .= "Linguagem adequada: ";
$contents .= $linguagem;
$contents .= "\n";
$contents .= "Contextualiza��o: ";
$contents .= $contextualizacao;
$contents .= "\n";
$contents .= "Experimenta��o: ";
$contents .= $experimentacao;
$contents .= "\n";
$contents .= "M�ltiplas abordagens: ";
$contents .= $alternativas;
$contents .= "\n";
$contents .= "Layout: ";
$contents .= $layout;
$contents .= "\n";
$contents .= "Dicas e feedback: ";
$contents .= $dicas;
$contents .= "\n";
$contents .= "Navega��o: ";
$contents .= $navegacao;
$contents .= "\n";
$contents .= "Conex�o com o mundo real: ";
$contents .= $mundoreal;
$contents .= "\n";
$contents .= "Interdisciplinaridade: ";
$contents .= $interdisciplinaridade;
$contents .= "\n";



$subject = mb_convert_encoding($subject, "UTF-8", "ISO-8859-1");
$contents = mb_convert_encoding($contents, "UTF-8", "ISO-8859-1");

// send mail - $subject & $contents come from surfer input
mail($to1, $subject, $contents, $from_header);
mail($to2, $subject, $contents, $from_header);

$html = "<a href=\"pge-01-br.html\">[Clique aqui para voltar para a p�gina principal!]</a>";

include("top.html");

   print("<br>");
   print("<br>");
   print("<center>");
   print("<strong>");
   print("<h1>");
   print("Obrigado pela sua avalia��o!");
   print("</h1>");
   print("<br>");
   print("</strong>");
   print("</center>");
   print("");
   print("<br>");
   print("<br>");
   print("<br>");
   print("<br>");
   print("<p align=\"center\">\n");
   print($html);
   print("</p>\n");

include("bottom.html");


?>

<?php
include "assets/php/funcoes.php";
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/styles/style.css">
    <title>Josinei Dornelas</title>
</head>
<body>
    <div class="paper">
        <header><strong><h1 class="title" onclick="typeWriter(title);">Currículo DEV</h1></strong></header>
        <section>
          <article>
            <h2 class="field"><strong>Identificação</strong></h2>
            <p><a class="name" href="https://github.com/josineidornelas" target="_blank"><em><strong>Josinei Gualberto Dornelas</strong></em></a> reside em:
            <br>Rua José Galvond, 135, Nossa Senhora Aparecida
            <br>Santos Dumont - MG (36244-098)
            <br>Contato: <a href="https://wa.me/5532998571598" class="contact" target="_blank">(32) 99857-1598</a>
            <br>Brasileiro, <?= calculaIdade();?> anos, casado.</p>
          </article>
          <article>
            <h2 class="field"><strong>Objetivo</strong></h2>
            <p>Apresento-me para vaga de <em>Analista de Desenvolvimento / Analista de Sistemas / Desenvolvimento Web</em>, e caso contratado buscarei satisfazer as necessidades da empresa, de forma a alcançar os objetivos de ambas às partes.</p>
          </article>
          <article>
            <h2 class="field"><strong>Formação Acadêmica</strong></h2>
            <p>2022 (em andamento) – <a class="contact" href="https://www.famonline.com.br/" target="_blank">Centro Universitário das Américas (FAM)</a><br>Pesquisa em andamento no campo da Internet das Coisas (IoT) com foco em computação móvel, pervasiva e ubíqua na área da saúde orientado pelo professor Doutor <a href="http://lattes.cnpq.br/0997252695811042" class="contact" target="_blank">Jorge Rodolfo Beingolea Garay</a></p>
            <p>2021 (cursando) – <a class="contact" href="https://www.famonline.com.br/" target="_blank">Centro Universitário das Américas (FAM)</a><br>Tecnólogo em Análise e Desenvolvimento de Sistemas</p>
            <p>2020 – <a class="contact" href="https://www.dio.me/" target="_blank">Digital Inovation One</a><br>Desenvolvimento Web</p>
          </article>
          <article>
            <h2 class="field"><strong>Experiência Profissional</strong></h2>
            <p>2014 / atual – Agente de Correios<br>Desde Abril de 2022 atuo no desenvolvimento de software em PHP / MySQL / Javascript para a Central de Atendimento dos Correios.<br><a class="contact" href="https://www.correios.com.br/" target="_blank">Empresa Brasileira de Correios e Telégrafos<a><br>Barbacena/MG</p>
            <p>2008 / 2014 - Cabo Especialista em Guarda e Segurança<br>Principais atribuições: licitações e contratos, bombeiro de aeródromo, chefe de equipe contraincêndio, instrutor de contraincêndio e serviços administrativos em geral.<br><a class="contact" href="https://www2.fab.mil.br/epcar/" target="_blank">Escola Preparatória de Cadetes do Ar</a><br>Barbacena/MG</p>
          </article>
          <article>
            <h2 class="field"><strong>Informações e Habilidades Relevantes</strong></h2>
            <p>Sou apaixonado por tecnologia e estou sempre disposto a aprender e melhorar minhas habilidades. Gosto do trabalho em equipe e sou aberto a mudanças e críticas.</p>
            <p>Inglês – Leitura e escrita.<br>Git e Github, C++, C#, Java - Básico.<br>HTML, CSS e JavaScript, PHP, MySQL, C, Linux, Windows, Hardware - Intermediário.<br>Microsoft Office, Libre Office - Avançado.</p>
          </article>
          <article>
            <h2 class="field"><strong>Termo de Compromisso</strong></h2>
            <p>Por minha responsabilidade, firmo serem verdadeiras todas as informações aqui apresentadas, e ponho-me a disposição para maiores esclarecimentos.</p>
          </article>
        </section>
        <form>
          <input class="print" type="button" value="Imprimir" onClick="window.print()"/>
        </form>
      </div>
</body>
<script src="assets/js/main.js"></script>
</html>
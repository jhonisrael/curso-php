<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel = "preconnect" href = "https://fonts.googleapis.com">
<link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
<link href = "https: //fonts.googleapis.com/css2? family = Oswald: wght @ 200; 300; 400; 500; 600; 700 & display = swap "rel =" stylesheet ">
<link rel="stylesheet" href="recursos/CSS/style.css">
    <title>Curso php</title>
</head>
<body>
    <header class="cabeçalho">
    <h1>Curso PHP</h1>
    <H2>Indice dos exercicios</H2>
    </header>
    <main class="principal">
    <div class="conteudo">
        <nav class="modulos">
            <div class="modulo roxa">
                <h3>4. Controle </h3>
                <ul>
                    <li>
                        <a href="exercicio.php?dir=controle1&file=if_else">
                            If Else
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=controle1&file=operadores_relacionais">
                            Operadores relacionais
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=controle1&file=desafio_pi">
                            Desafio PI
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=controle1&file=operadores_logicos">
                            Operadores Lógicos
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=controle1&file=desafio_operadores_logicos">
                            Desafio op. lógicos
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=controle1&file=operador_ternario">
                            Operador Ternário
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=controle1&file=switch">
                            Switch
                        </a>
                    </li>
                </ul>
            </div>
            <div class="modulo azul">
                <h3>3. Variáveis </h3>
                <ul>
                    <li>
                        <a href="exercicio.php?dir=variaveis&file=basico">
                            Variáveis
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=variaveis&file=desafio_equacao">
                            Desafio equação
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=variaveis&file=atribuicoes">
                            Atribuições
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=variaveis&file=interpolacao">
                            Interpolação
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=variaveis&file=variaveis_variaveis">
                           Variáveis variáveis
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=variaveis&file=desafio_variaveis">
                           Desafio variáveis
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=variaveis&file=valor_referencia">
                           Valor Vs Referência
                        </a>
                    </li>
                </ul>   
            </div>
            <div class="modulo vermelho">
                <h3>2. Tipos </h3>
                <ul>
                    <li>
                        <a href="exercicio.php?dir=tipos&file=int">
                            Tipo inteiros
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=tipos&file=float">
                            Tipo float
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=tipos&file=aritimeticas">
                            Op. aritiméticas
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=tipos&file=desafio_precedencia">
                            Desafio precedencia
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=tipos&file=desafio_string">
                            Desafio string
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=tipos&file=booleano">
                            Tipo Booleano
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=tipos&file=conversao">
                            Conversão
                        </a>
                    </li>
                </ul>
            </div>
            <div class="modulo verde">
                <h3>1. Básicos </h3>
                <ul>
                    <li>
                        <a href="exercicio.php?dir=basico&file=ola">
                            olá php
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=basico&file=html">
                            integração html
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=basico&file=css">
                            integração css
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=basico&file=comentarios">
                            comentarios php
                        </a>
                    </li>
                    <li>
                        <a href="exercicio.php?dir=basico&file=desafio">
                            desafio
                        </a>
                    </li>
                </ul>
            </div>
           
        </nav>
    </div>
    </main> 
    <footer class="rodape">
        COD3R & ALUNOS <?= date('y'); ?>
    </footer>
</body>
</html>
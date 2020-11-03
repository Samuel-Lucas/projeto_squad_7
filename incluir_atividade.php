<?php
        require_once "php/actions/conexao.php";
        include_once "php/includes/head.php";
        include_once "php/includes/header.php";
        include "php/actions/verifica_login.php";
?>      

    <div class="container">
        <div class="jumbotron my-4 d-flex align-items-center" style="background: url(img/atividade.jpg) no-repeat">
    </div>

    <h3 class="text-center">Incluir atividade</h3>

    <div class="container mt-4">

        <form action="php/actions/cadastrar_atividade.php" method="post" class="form-group">

            <label>Disciplina:</label><br>
            <select name="disciplina" class="form-control bg-gray">
                <option value="">Escolha uma disciplina</option>
                <option value="linguagens">Linguagens</option>
                <option value="matematica">Matemática</option>
                <option value="cienciasdanatureza">Ciências da Natureza</option>
            </select><br><br>

            <label>Metodologia</label><br>

            <div class="d-flex flex-wrap justify-content-md-between justify-content-sm-around">
                <span><input type="radio" name="metodologia" value="mao_na_massa"> Mão na Massa</span>
                <span><input type="radio" name="metodologia" value="sala_invertida"> Sala de aula Invertida</span>
                <span><input type="radio" name="metodologia" value="aprendizagem_em_dupla"> Aprendizagem em Dupla</span>
                <span><input type="radio" name="metodologia" value="gameficacao"> Gameficação</span>
                <span><input type="radio" name="metodologia" value="tecnologias_criativas"> Tecnologias Criativas</span>
            </div><br><br>

            <span><label>Título: </label> <input type="text" name="titulo" class="form-control bg-gray"></span><br>

            <label>Descrição:</label>
            <textarea name="descricao" class="form-control bg-gray" cols="20" rows="5"></textarea>


            <h4 class="text-secondary mt-3">Anexos</h4><br>

            <span><label>Links: </label> <input type="text" name="links" class="form-control bg-gray"></span><br>

            <span>Upload: Passo_a_Passo.pdf (Exemplo)</span><br><br><br>

            <div class="w-60 mb-4">
                <span><input type="checkbox" name="termo" value="1"> Declaro ser responsável pelo conteúdo da atividade
                enviada, haverá aprovação dos moderadores do conteúdo relacionado a relevância ao tema
                (EFO5MAO6), e ao uso de materiais de baixo ou nenhum custo agregado.</span>
            </div>

            <div class="container d-flex justify-content-between">
                <button class="btn btn-success" type="submit">Salvar</button>
                <a class="btn btn-danger text-white" href="painel.php">Cancelar</a>    
            </div>
        </form>
    </div>
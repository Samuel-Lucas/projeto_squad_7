function validar() {
    let nome = form_cadastro.nome.value
    let email = form_cadastro.email.value
    let perfil = form_cadastro.perfil.value
    let senha = form_cadastro.senha.value
    let confirmasenha = form_cadastro.confirmasenha.value

        if(nome == '') {
            alert('Preencha seu Nome')
            form_cadastro.nome.focus()
            return false
        }

        else if(nome.length > 50) {
            alert('Ultrapassou o limite do campo nome')
            form_cadastro.nome.focus()
           return false
        }

        else if(perfil == '') {
            alert('Escolha o seu Perfil')
            form_cadastro.perfil.focus()
           return false
        }

        else if(email == '' || email.indexOf('@') == -1) {
            alert('Preencha o campo E-mail')
            form_cadastro.email.focus()
            return false
        }

        else if(senha == '') {
            alert('Preencha o campo senha')
            form_cadastro.senha.focus()
            return false
        }

        else if(confirmasenha == '') {
            alert('Confirme sua senha')
            form_cadastro.confirmasenha.focus()
            return false
        }

        else if(senha.length < 6) {
            alert('Sua senha precisa ter no mínimo 6 caracteres')
            form_cadastro.senha.focus()
            return false

        }

        else if(senha != confirmasenha) {
            alert('Sua senha digitada e na confirmação estão diferentes')
            form_cadastro.senha.focus()
            form_cadastro.confirmasenha.focus()
            return false
        }     
}
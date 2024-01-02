<header>
    <h3><i class="bi bi-person-square"> Cadastro de contato</h3></i>
</header>
<div>
    <form class="needs-validation" action="index.php?menuop=inserir-contato" method="post" novalidate>
    <div class="mb-3">
        <label class="form-label" for="nomeContato">Nome</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
            <input class="form-control" class="text" name="nomeContato" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">
                Nome obrigatório!
            </div>
        </div>
        
    </div>

    <div class="mb-3">
        <label class="form-label" for="emailContato">E-mail</label>
        <div class="input-group">
            <span class="input-group-text">@</span>
            <input class="form-control" type="email" name="emailContato" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">
                Email obrigatório!
            </div>
        </div>
        
    </div>

    <div class="mb-3">
        <label class="form-label" for="telefoneContato">Telefone</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
            <input class="form-control" type="text" name="telefoneContato" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">
                Telefone obrigatório!
            </div>
        </div>

    </div>

    <div class="mb-3">
        <label class="form-label" for="enderecoContato">Endereço</label>
        <div class="input-group">
            <span class="input-group-text"><i class="bi bi-mailbox2"></i></span>
            <input class="form-control" type="text" name="enderecoContato" required>
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">
                Endereço obrigatório!
            </div>
        </div>
        
    </div>
    
    <div class="row">
        <div class="mb-3 col-3">
            <label class="form-label" for="sexoContato">Gênero</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
                <select class="form-control form-select" name="sexoContato" id="sexoContato" required>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback"></div>
                    <option selected value="">Selecione</option>
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                </select>
            </div>
        </div>  

        <div class="mb-3 col-3" >
            <label class="form-label" for="dataNascContato">Data de nascimento</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-calendar-fill"></i></span>
                <input class="form-control" type="date" name="dataNascContato" required>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">
                    Informe data de nascimento
                </div>
            </div>  
        </div>
    </div>
    

    <div class="mb-3">
        <input class="btn btn-primary" type="submit" value="Adicionar" name="btn-adicionar">
    </div>
</div>
</form>     
    
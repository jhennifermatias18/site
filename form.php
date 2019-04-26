<section id="formulario">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-1">
                <h1>
                    Nosso endereço
                </h1>
                <p>
                    Rodovia Jorge Lacerda, nº 3201 - Km 35,4<br>
                    Jardim das Avenidas,<br>
                    Araranguá, Bloco C, Sala 03<br>
                    (48) 3721-6961<br>
                    comercial@ejec.eng.br
                </p>
                <a href="mapa.php" class="btn btn-secundary">Veja nossa localização aqui</a>

            </div>
            <div class="col-md-6 order-2">
                <form action="contato">
                    <div>
                        <label>Nome</label>
                        <input type="text" class="form-control" name="nome" required placeholder="Nome">
                    </div>
                    <div>
                        <label>E-mail</label>
                        <input type="email" class="form-control" name="email" required placeholder="example@example.com">
                    </div>
                    <div>
                        <label>Telefone</label>
                        <input type="text" class="form-control" name="telefone" required placeholder="(__)_____-____">
                    </div>
                    <div>
                        <label>Dúvida</label>
                        <textarea class="form-control" name="mensagem" style="resize:none" required rows="5" placeholder="Deixe sua mensagem"></textarea>
                    </div>

                    <div class="botao">
                        <input type="submit" value="enviar" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<body>
    <section class="iniciar_sesion">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form >
                            <div class="form-group">
                                <h3>Iniciar sesión</h3>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Correo electrónico" aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" name ="password"
                                    placeholder="Contraseña" required>
                            </div>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary" @click="">Iniciar sesión</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</html>
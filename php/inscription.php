<!-- Modal -->
<div class="modal fade" id="ModalRegister" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fermer</span></button>
                <h4 class="modal-title" id="myModalLabel">Inscrivez-Vous</h4>
            </div>

            <form class="form-horizontal" role="form" action="./php/processing/post.php" method="post">
                <div class="modal-body">

                    <input type="hidden" name="action" value="register">

                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Pseudo</label>
                        <div class="col-sm-9">
                            <input name="username" type="text" class="form-control" placeholder="Pseudo">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-9">
                            <input name="usermail" type="email" class="form-control" placeholder="tapez votre email">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pass" class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-9">
                            <input name="userpass" type="password" class="registerpass form-control" placeholder="Password">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pass" class="col-sm-3 control-label">retappez le password</label>
                        <div class="col-sm-9">
                            <input name="userrepeatpass" type="password" class="registerpass form-control" placeholder="Retapez votre password">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">

                    <div class="col-sm-3">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    </div>
                    <div class="col-sm-9">
                        <button type="submit" class="btn btn-primary btn-default">S'inscrire !</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="ModalConnect" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fermer</span></button>
                <h4 class="modal-title" id="myModalLabel">Connectez-Vous</h4>
            </div>
            <form class="form-horizontal" role="form" action="./php/processing/post.php" method="post">
                <div class="modal-body">

                    <input type="hidden" name="action" value="connexion"/>

                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Pseudo ou email</label>
                        <div class="col-sm-9">
                            <input name="userlogin" type="text" class="form-control" placeholder="Pseudo ou email">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pass" class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-9">
                            <input name="userpass" type="password" class="form-control" placeholder="Password">
                        </div>
                    </div>

                </div>
            </form>

            <div class="modal-footer">

                <div class="col-sm-3">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                </div>
                <div class="col-sm-9">
                    <button type="submit" class="btn btn-primary btn-default">Connection !</button>
                </div>
            </div>
        </div>
    </div>
</div>
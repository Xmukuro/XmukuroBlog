<!-- Modal -->
<div class="modal fade" id="ModalRegister" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Inscription</h4>
            </div>
            <div class="modal-body">

                <form class="form-inline" role="form" action="./php/processing/post.php">
                    <div class="form-group">
                        <label class="sr-only" for="login">login</label>
                        <input type="login" class="form-control" id="login" name="pseudo" placeholder="Enter Account">
                    </div>
                    <br/><br/>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon">@</div>
                            <input class="form-control" type="email" id="email" name="email" placeholder="Enter email">
                        </div>
                    </div>
                    <br/><br/>

                    <div class="form-group">
                        <label class="sr-only" for="pass">Password</label>
                        <input type="password" class="form-control" id="pass" name="pass" placeholder="Enter Password">
                    </div>
                    <br/><br/>

                    <div class="form-group">
                        <label class="sr-only" for="repeatpass">Password</label>
                        <input type="password" class="form-control" id="repeatpass" name="pass" placeholder="Repeat Password">
                    </div>
                    <br/><br/>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Remember me
                        </label>
                    </div>


                    <button type="submit" class="btn btn-default">Sign in</button>
                    <br/>
                    <input type="hidden" name="post-type" value="inscription"/>
                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
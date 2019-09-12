<!--
    Modal : https://getbootstrap.com/docs/4.3/components/modal/
-->

<div class="modal fade" id="exempleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Saisies du formulaire</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="modal_item">
                    <p style="color: rgb(2, 82, 134)">Nom de Famille : </p>
                    <p class="modal_item-data"><?php echo '&#10151; ' . $familyname = isset($_POST['familyname']) ? htmlspecialchars($_POST['familyname']) : ' Remplir et soumettre le formulaire.'; ?></p>
                </div>
                
                <div class="modal_item">
                    <p style="color: rgb(2, 82, 134)">Votre prénom : </p>
                    <p class="modal_item-data"><?php echo '&#10151; ' . $firstname = isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname']) : ' Remplir et soumettre le fomulaire.'; ?></p>
                </div>
                
                <div class="modal_item">
                    <p style="color: rgb(2, 82, 134)">Votre email : </p>
                    <p class="modal_item-data"><?php echo '&#10151; ' . $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ' Remplir et soumettre le fomulaire.'; ?></p>

                </div> 
                <?php 
                
                    // echo 'Nom de famille : ' . $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : 'Soumettre le fomulaire.' ;
                    // echo '<br>Prénom : ' . $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : 'Soumettre le fomulaire.' ;
                    // echo '<br>Email : ' . $email = isset($_POST['email']) ? $_POST['email'] : 'Soumettre le fomulaire.' ;
                    
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>


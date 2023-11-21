<button class="btn btn-success mt-5" onclick="openModal()"> Category</button>

         <!-- The pop-up modal -->
         <div id="myModal" class="modal">
             <div class="modal-content">
                 <span class="close" onclick="closeModal()">&times;</span>
                 <form action="useraction.php" method="post" class="form m-auto justify-content-center text-white">
                     <div class="form-group">
                         <label for="title">Title</label>
                         <input type="text" class="form-control" id="title" name="title" placeholder="Category Name" required>
                     </div>
                     <button type="submit" class="btn btn-success" name="category_submit">Submit</button>
                 </form>

                 <div class="container mt-5">
                     <div class="row justify-content-center">
                         <div class="col-md-6">
                             <div class="card">
                                 <div class="card-header">Categories</div>
                                 <div class="card-body">
                                     <ul class="list-group">

                                         <?php
                                            $all_categories = $category->get_categories();
                                            foreach ($all_categories as $row) :
                                            ?>


                                             <li class="list-group-item d-flex justify-content-between align-items-center">
                                                 <?php echo $row['cat_title']; ?>
                                                 <div>
                                                     <form action="useraction.php" method="post" class="form m-auto justify-content-center text-white">
                                                        <input type="hidden" name="cat_id" value="<?php echo $row['id']; ?>">
                                                         <button type="submit" class="btn btn-success" name="category_delete">Delete</button>
                                                     </form>
                                                 </div>
                                             </li>

                                         <?php endforeach; ?>

                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             
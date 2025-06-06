<!DOCTYPE html>
<html lang="en">

<head> 
    <?php require ADMIN . 'includes/header.inc.php' ?> 
     <style>
        .star {
          font-size: 2rem;
          color: lightgray;
          cursor: pointer;
        }
    
        .star.selected {
          color: gold;
        }
      </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    <main class="wrapper">
         
        <?php 
        $pageid = 'approvals'; 
        require ADMIN . 'includes/sidebar.inc.php' ?>
        
        
            <div class="content-wrapper px-4 py-2">
            <div class="content-header"> 
                <a href='#'   class='btn btn-sm btn-primary openmod' >Approve Awards</a>
            </div>
            <div class="content px-2">
                
                    <div class='container alert'>
                        <div class='table-responsive'>
                            <table class='table table-striped table-hover'>
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Post by</th>  
                                        <th>Img</th> 
                                        <th>Status</th> 
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 0; foreach($this->data as $row) { $i++; ?>
                                    <tr>
                                        <td><?= $i ?></td>
                                        <td> <a href='/awards/contestants/<?= $row['a_url'] ?>' target='_blank' style='color:blue' ><?= $row['a_title'] ?></a> </td>
                                        <td> <?= $row['user_full_name']?> </td> 
                                        <td> <img src='/public/assets/uploads/<?= $row['a_img'] ?>' style='height:40px' > </td>
                                        <td> <?= $row['a_status'] ?> </td>
                                      
                                        <td>
                                            <a class='btn btn-sm btn-success approve_awards' href='#'   rel='<?= $row['a_ID'] ?>'>Approve</a> 
                                        </td> 
                                   
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                             
                        </div>
                     
                        
                        
 
                    </div>
                
                 
            </div>
        </div>
        
        
        <?php require ADMIN.'includes/footer.inc.php' ?> 
        
  <script>
    $(document).ready(function () {
        
        
             $('.approve_awards').click(function(e) {
                e.preventDefault();
                var form = new FormData();
                form.append('id', $(this).attr('rel') );  
                
                if (confirm("Are you sure?")) {
                    const data = _data(form, 'approve_awards');
                    if (data['error'] == 'true') alert(data['msg']);
                    else {
                        alert(data['msg']);
                        location.reload();
                    }
                }
             
            });
            
       
    });
  </script>
    </main> 
 
</body>

</html>
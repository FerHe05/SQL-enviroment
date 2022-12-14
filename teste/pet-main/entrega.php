<?php
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION["user"])) {
    session_destroy();
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Pet Shop DogCat</title>
</head>

<body>
    <!--<style type="text/css">
        img {
            background-color: #ddd;
            border-radius: 50%;
            height: 70px;
            object-fit: cover;
            width: 70px;
        }
    </style>-->
    <center>
        <h2>Pet Shop DogCat</h2>
    </center>
    <hr />
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <?php
            include("menu.php");
            ?>
        </ul>&nbsp;
        <span calss="navbar-text">
            <?php
            echo "<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='gray' class='bi bi-person-square' viewBox='0 0 16 16'>
            <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z'/>
            <path d='M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1v-1c0-1-1-4-6-4s-6 3-6 4v1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12z'/>
            </svg>&nbsp;Olá, " . $_SESSION["user"] . "&nbsp;";
            echo "<a href='sair.php' style='color: gray; text-decoration: none; font-weight: bold;'>Sair&nbsp;&nbsp;&nbsp;</a>";
            ?>
        </span>
    </nav>
    <br />
    <br />
    <div class="row row-cols-1 row-cols-md-2 mb-2 position-relative">
        <div class="col position-absolute top-50 start-50 translate-middle-x">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
  <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
</svg>
                            <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z" />
                        </svg>&nbsp;&nbsp;<b>Entrega</b></h4>
                </div>
                <div class="card-body">
                    <button type="button" class="btn btn-outline-secondary btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">+ Nova Entrega</button>
                    <br />
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>                           
                                <th scope="col">Nome</th>
                                <th scope="col">Celular</th>
                                <th scope="col">Produtos</th>
                                <th scope="col">Endereço</th>
                                <th scope="col">Status da Entrega</th>                               
                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include 'conecta.php';
                            $query = mysqli_query($con, "SELECT * FROM entrega");
                            if ($query->num_rows > 0) {
                                while ($entrega = $query->fetch_array()) {
                                    $id = $entrega['id'];                                   
                                    echo '<tr>';
                                    echo '<th scope="row">' . $entrega['id'] . '</th>';
                                    echo '<td>' . $entrega['nome'] . '</td>';
                                    echo '<td>' . $entrega['celular'] . '</td>';
                                    echo '<td>' . $entrega['produto'] . '</td>';
                                    echo '<td>' . $entrega['endereço'] . '</td>';
                                    echo '<td>' . $entrega['status'] . '</td>';

                                    echo '<td><a href="#?id=' . $id . '" data-bs-toggle="modal" data-bs-target="#editaEntrega' . $id . '"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                    </svg></a> | <a href="excluir_entrega.php?id=' . $id . '"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    </svg></i></a></td>';
                            ?>
                                    <div class="modal fade" id="editaEntrega<?php echo $id; ?>" tabindex="0" aria-labelledby="editaEntrega" aria-hidden="true" data-bs-backdrop="false">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editaEntrega">Editar Entrega</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <?php
                                                    include 'conecta.php';
                                                    $query2 = mysqli_query($con, "SELECT * FROM entrega WHERE id=$id");
                                                    if ($query2->num_rows > 0) {
                                                        while ($entrega2 = $query2->fetch_array()) {
                                                            $id = $entrega2['id'];
                                                            $nome = $entrega2['nome'];
                                                            $celular = $entrega2['celular'];
                                                            $produto = $entrega2['produto'];
                                                            $endereço = $entrega2['endereço'];
                                                            $status = $entrega2['status'];
                                                   

                                                        }
                                                    }
                                                    ?>
                                                    <form action="atualiza_entrega.php?id=<?php echo $id; ?>" method="post">                                                     
                                                        <br />
                                                        <label><b>Nome do Cliente</b></label>
                                                        <input type="text" name="nome" value="<?php echo $nome; ?>" required="required" autofocus class="form-control border-color:gray" />                                                        
                                                        <br />                                              
                                                        <label><b>Contato</b></label>
                                                        <input type="text" name="celular" value="<?php echo $celular; ?>" required="required" class="form-control" />                                                
                                                        <br />    
                                                        <label><b>Produtos</b></label>
                                                        <input type="text" name="produto" value="<?php echo $produto; ?>" required="required" class="form-control" />                    
                                                        <br />
                                                        <label><b>Endereço</b></label>
                                                        <input type="text" name="endereço" value="<?php echo $endereço; ?>" required="required" class="form-control" />                    
                                                        <br />
                                                        <label><b>Status</b></label>
                                                        <input type="text" name="status" value="<?php echo $status; ?>" required="required" class="form-control" />                    
                                                        <br />
                                                        <input type="submit" value="Atualizar" class="btn btn-outline-secondary" name='but_upload' />
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                    echo '</tr>';
                                }
                            }
                            mysqli_close($con);
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Entrega</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="cadastra_entrega.php" method="post" enctype="multipart/form-data">
                            <label><b>Nome do Cliente</b></label>
                            <input type="text" name="nome" placeholder="Digite o nome do cliente" required="required" autofocus class="form-control border-color:gray" />
                            <br />
                            <label><b>Celular</b></label>
                            <input type="text" name="celular" placeholder="Digite um número para contato" required="required" class="form-control" />
                            <br />
                            <label><b>Produtos</b></label>
                            <input type="text" name="produto" placeholder="Nome do produto" required="required" class="form-control" />                         
                            <br />
                            <label><b>Endereço</b></label>
                            <input type="text" name="endereço" placeholder="Digite um endereço de entrega" required="required" class="form-control" />                         
                            <br />
                            <label><b>Status da entrega</b></label>
                            <input type="text" name="status" placeholder="Status da entrega" required="required" class="form-control" />                         
                            <br />
                            <input type="submit" value="Cadastrar" class="btn btn-outline-secondary" name='but_upload' />
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
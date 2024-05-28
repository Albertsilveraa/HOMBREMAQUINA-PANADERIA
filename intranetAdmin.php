<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once ("./public/view/utils/enlacesCss.php"); ?>
    <link rel="stylesheet" href="./public/css/desing-admin.css">
    <title>.:: Digimedia ::.</title>
</head>

<body>
    <?php require_once ("./public/view/utils/sidebar.php");
    //echo json_encode(['mensaje' => 'Datos procesados en PHP con éxito']);
    ?>

    <main>
        <h1>Seccion principal</h1>

        <div class="content-table">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">SERVICIO</th>
                        <th scope="col">NUMERO</th>
                        <th scope="col">MENSAJE</th>
                        <th scope="col">EMAIL MARK</th>
                        <th scope="col">NEW</th>
                        <th scope="col">PRODUCTION</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Hora</th>
                        <th scope="col">ESTADO</th>
                        <th scope="col">ACCION</th>
                    </tr>
                </thead>
                <tbody id="tableBody"></tbody>
            </table>
        </div>

    </main>



    <script>

        const tableBody = document.getElementById('tableBody')

        tableBody.addEventListener('click', e => {
            const button = e.target.closest('button')

            if (button) {
                const tr = button.closest('tr')

                const id = tr.getAttribute('data-id')
                const action = button.getAttribute('data-action')

                if (action == 'eliminar') {
                    tr.remove()

                    fetch(`./app/trigger/intranet.php?action=DELETE&id=${id}`)
                        .then(res => res.json())
                        .then(console.log)
                }

                else if (action == 'canbiarEstado') {

                    const formData = new FormData()
                    formData.append('estado', button.getAttribute('data-estado') == 0 ? 1 : 0)

                    fetch(`./app/trigger/intranet.php?action=UPDATE_STATUS&id=${id}`, { method: 'POST', body: formData })
                        .then(res => res.json())
                        .then(dataRender)
                }
            }
        })
        
        const dataRender = () => {
            fetch('./app/trigger/intranet.php?action=GET')
                .then(res => res.json())
                .then((Data = []) => {

                    tableBody.innerHTML = Data.map(data => {
                        return `
                <tr data-id="${data.id}">
                    <td>${data.id}</td>
                    <td>${data.nombre}</td>
                    <td>${data.email}</td>
                    <td>${data.servicio}</td>
                    <td>${data.numero}</td>
                    <td>${data.mensaje}</td>
                    <td>${data.emailMarck}</td>
                    <td>${data.new}</td>
                    <td>${data.production}</td>
                    <td>${data.fecha_hora}</td>
                    <td>${data.fecha_hora_actualizacion}</td>
                    <td>
                        <span>${data.estado == 0 ? 'pendiente' : 'Atendido'}</span>
                    </td>
                    <td>
                        <button data-action="eliminar" class="btn btn-danger">Eliminar</button>
                        ${data.estado == 0 ? `<button data-action="canbiarEstado" data-estado="${data.estado}" class="btn btn-warning">Cambiar</button>` : ''}
                    </td>
                </tr>
            `
                    }).join('')

                })
        };

        dataRender();


        document.getElementById('logout').addEventListener('click', ()=> {
            fetch('./app/trigger/logout.php')
                .then( res => res.json() )
                .then( ()=> location.reload())
        })



    </script>
    
   

    <?php require_once ("./public/view/utils/enlacesDatatables.php"); ?>

    <!-- Script para el sidebar -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./public/js/js-admin.js"></script>
</body>

</html>
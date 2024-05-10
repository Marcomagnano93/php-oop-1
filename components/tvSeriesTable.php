<div class="container my-5">
    <div class="text-center p-3 bg-info bg-opacity-10 border border-info rounded my-3">
        <h2>TV Series</h2>
    </div>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Language avaible</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Description</th>
                    <th scope="col"><span class=" text-center">Seasons</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < count($productions_tv); $i++) { ?>
                    <tr>
                    <th scope="row"><?php echo $i+1; ?></th>
                    <td><?php echo $productions_tv[$i]->title ?></td>
                    <td><?php echo $productions_tv[$i]->language ?></td>
                    <td><?php echo $productions_tv[$i]->vote ?>/10</td>
                    <td><?php echo $productions_tv[$i]->genre->name ?></td>
                    <td><?php echo $productions_tv[$i]->genre->description ?></td>
                    <td><?php echo $productions_tv[$i]->seasons ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
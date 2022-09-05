<div class="widget">
    <h2 class="widget-title container">Program</h2>
    <section class="cards-wrapper" id="program">
        <?php foreach ($data as $p) {    
            echo '<div class="card-grid-space"><a href="'.base_url().'program/'.$p->slug.'" class="card rounded-circle " style="--bg-img:url('.base_url().'assets/frontend/img/'.$p->logo.')"><div><h3 class="color-yellow">Jak B Bertaqwa</h3></div></a></div>';
        }?>
    </section>
</div>
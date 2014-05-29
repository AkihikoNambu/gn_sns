<section class="portfolio-item-details">
    <div class="row-fluid">
        <div class="span8">
            <?php echo image_tag('/'.sfConfig::get('sf_upload_dir_name').'/'.$report->getImage()) ?>
        </div>
        <div class="span4">
            <div class="close-portfolio">
                <span>&#10006;</span>
                <div class="clearfix"></div>
            </div>
            <h5><?php echo $report->getYear() ?>　<?php echo $report->getHostCountry() ?></h5>
            <article class="smallFontBy08">
                <p>
                    <?php echo $report->getBody() ?>
                </p>
            </article>
            <section class="website">
                <h5>Download</h5>
                <a href="assets/reports/gnlf2013jap.pdf" target="_blank" class="smallFontBy08">
                <?php echo link_to($report->getReportfile(), '/'.sfConfig::get('sf_upload_dir_name').'/'.$report->getReportfile()) ?></a>
            </section>
            
            
        </div>
    </div>
</section>


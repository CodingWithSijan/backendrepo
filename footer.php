                <?php
                if(is_admin_login())
                {
                ?>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted"> Library Management System</div>
                            <div>Author@Sijan Pradhan</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
                <?php
                }
                else
                {
                ?>
                <footer class="pt-3 mt-4 text-muted text-center border-top">
                    <?php echo "Web Development Project" ?>
                </footer>
            </div>
        </main>
                <?php 
                }
                ?>
        <script  src="<?php echo base_url(); ?>asset/js/scripts.js"></script>

    	<script  src="<?php echo base_url();?>asset/js/bootstrap.min.js"></script>
        <script  src="<?php echo base_url();?>asset/js/simple-datatables@latest.js"></script>
        <script src="<?php echo base_url();?>asset/js/datatables-simple-demo.js"></script>

    </body>

</html>
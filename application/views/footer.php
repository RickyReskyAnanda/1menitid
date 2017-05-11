        <div class="footer">
            
            <div>
                <strong>EXOMATIK</strong> Study Club  2004 - Sekarang
            </div>
        </div>
    </div>
</div>

    <!-- Mainly scripts -->
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?=base_url()?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    
    <script src="<?=base_url()?>assets/js/inspinia.js"></script>
    <script src="<?=base_url()?>assets/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="<?=base_url()?>assets/js/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?=base_url()?>assets/js/plugins/summernote/summernote.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 550,  
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: true
            });
        });
        var postForm = function() {
            var content = $('textarea[name="content"]').html($('#summernote').code());
        }
    </script>
</body>

<!-- Mirrored from webapplayers.com/inspinia_admin-v2.3/dashboard_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 04 Dec 2015 00:53:15 GMT -->
</html>

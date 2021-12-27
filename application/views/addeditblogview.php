<section class="content">
    <div class="container-fluid">
        <div class="block-header">
        </div>
        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <?= $Page_type; ?>
                        </h2>
                    </div>
                    <div class="body">
                        <?php //print_r($Blog_detail); exit; ?>
                        <div class="" id="blogdetailPage" data-blogid="<?= $blog_id; ?>">
                            <form name="addUpdateBlog" id="form_validation" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="blog_title" required aria-required="true" maxlength="75">
                                                <label class="form-label active">Title</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="search_topics" id="search_topics" maxlength="75" aria-required="true">
                                            <label class="form-label">Add Topics</label>
                                            <p class="error-topics"></p>
                                        </div>
                                        <div class="form-group searched_topics position-absolute w-75 bg-light p-t-10" style="position: absolute; background: white; left: 0; z-index: 10;">
                                            
                                        </div>
                                        <div class="form-group selected_topics">
                                        <label class="m-t-10">Selected Topics:</label>
                                        <div class="row px-4 col-xs-12">
                                            <?php
                                            $selectedTopicIds = array ();

                                            if ( ! empty( @$Blog_detail['topic_associated'] ) ) {
                                                    foreach ( @$Blog_detail['topic_associated']  as $ta ):
                                                            $selectedTopicIds[] = $ta[ 'topic_id' ];
                                                            ?>
                                                            <div class="btn bg-teal m-t-5 m-r-10 selected-topic">
                                                                <input type="hidden" name="topics[]" value="<?= $ta[ 'topic_id' ] ?>" data-id="<?= $ta[ 'topic_id' ] ?>"><?= $ta[ 'topic' ] ?>
                                                                <i class="cancel" style="cursor:pointer">&nbsp; ×</i>
                                                            </div>
                                                            <?php
                                                    endforeach;
                                            }
                                            ?>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-md-6">
                                        <!--<div class="form-group form-float">
                                            <div class="form-line">
                                                <select class="form-control" name="blog_category" required>
                                                    <option value="">-\-Select Category-\-</option>
                                                    <?php
                                                    /*foreach ( $category_list as $key => $list ):
                                                            echo '<option value="' . $list[ 'id' ] . '">' . $list[ 'name' ] . '</option>';
                                                    endforeach;*/
                                                    ?>

                                                </select>
                                                <label class="form-label">Category</label>
                                            </div>
                                        </div>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <select class="form-control" name="blog_subcategory" required>
                                                    <option value="">-\-Select Sub Category-\-</option>
                                                    <?php
                                                    /*foreach ( $sub_category_list as $key => $list ):
                                                            echo '<option data-catid="' . $list[ 'category_id' ] . '" value="' . $list[ 'id' ] . '" >' . $list[ 'name' ] . '</option>';
                                                    endforeach;*/
                                                    ?>

                                                </select>
                                            </div>
                                        </div> -->
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <select class="form-control" name="blog_type" required>
                                                    <option value="">--Select Blog Type--</option>
                                                    <option value="1" >Blog</option>
                                                    <option value="2" >Article</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group form-float" style="margin-bottom:5px;">
                                            <div class="input-group date" id="blog_datetimepicker" style="margin-bottom:5px;">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="blog_date" id="blog_date" readonly="readonly" required="" style="background-color: transparent;" aria-required="true">
                                                    <label class="form-label">Blog Date</label>
                                                </div>
                                                <span class="input-group-addon" >
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input id="uploadFile" placeholder="Choose Cover Image" disabled="disabled" />
                                                <div class="fileUpload btn btn-primary">
                                                    <span>Upload</span>
                                                    <input id="uploadBtn" name="blog_img" type="file" class="upload" required/>
                                                </div>
                                                <br />
                                                <i class="small">File size should be less than 1 MB and dimension should be minimum 200*200</i>
                                            </div>
                                        </div>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <img src="" class="blog-image" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <textarea class="form-control" name="meta_keywords" required aria-required="true"></textarea>
                                                <label class="form-label active">Meta Keywords</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <textarea class="form-control" name="meta_description" required aria-required="true"></textarea>
                                                <label class="form-label active">Meta Description</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">

                                        <label class="form-label">Description</label>
                                        <div class="form-group form-float">
                                            <textarea name="blog_desc_editor" id="blog_desc_editor" rows="10" cols="130"><?= @$Blog_detail[ 'description' ]; ?></textarea>
                                            <label id="blog_description-error" class="editorerror" >This field is required.</label>
                                        </div>

                                        <!--<label class="form-label">Description</label>
                                        <div class="form-group form-float">
                                            <div id="blog_desc_editor"></div>
                                            <label id="blog_description-error" class="editorerror" >This field is required.</label>
                                        </div>-->

                                        <input type="hidden" name="blogid" id="blogid" value="<?= $blog_id; ?>">

                                        <?php if ( @$Blog_detail[ 'is_approve' ] == 0 && $blog_id != 0 ) { ?>

                                                <button type="submit" class="btn btn-success waves-effect approveblog">Save and Approve</button>
                                                <button type="submit" class="btn btn-danger waves-effect rejectblog">Save and Reject</button>



                                        <?php } else { ?>

                                                <button type="submit" class="btn btn-success waves-effect">Save</button>
                                        <?php } ?>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Exportable Table -->
</section>

<!--<script src="/assets/ckeditor/ckeditor.js"></script>
<script src="/assets/ckeditor/config.js"></script>
<script src="/assets/ckeditor/styles.js"></script>-->
<script src="//cdn.ckeditor.com/4.10.0/standard-all/ckeditor.js"></script>
<script>
        $(function () {
            $('#blog_datetimepicker').datetimepicker({
                useCurrent: false,
                format: "DD-MM-YYYY",
                ignoreReadonly: true
            });
<?php
if ( $blog_id > 0 ) {
        echo "var blogid = " . $Blog_detail[ 'id' ] . ";\n";
        echo "var data= " . json_encode( $Blog_detail ) . ";\n";
}
?>

            //image file change function 
            $("#uploadBtn").on("change", function () {
                var filename = $(this).val();
                filename = filename.replace(/\\/g, '/').replace(/.*\//, '');
                $("#uploadBtn").closest(".form-group").find("#uploadFile").val(filename);
            });
            CKEDITOR.tools.callFunction(1, this);
            CKEDITOR.plugins.addExternal('simpleImageUpload', '/assets/ckeditor/plugins/simpleImageUpload/', 'plugin.js');

            CKEDITOR.replace('blog_desc_editor', {
                height: 260,
                //ImageUpload: true,
//                filebrowserBrowseUrl: 'ckeditor/kcfinder/browse.php?opener=ckeditor&type=files',
//                filebrowserImageBrowseUrl: 'ckeditor/kcfinder/browse.php?opener=ckeditor&type=images',
//                filebrowserFlashBrowseUrl: 'ckeditor/kcfinder/browse.php?opener=ckeditor&type=flash',
//                filebrowserUploadUrl: 'ckeditor/kcfinder/upload.php?opener=ckeditor&type=files',
//                filebrowserImageUploadUrl: 'ckeditor/kcfinder/upload.php?opener=ckeditor&type=images',
//                filebrowserFlashUploadUrl: 'ckeditor/kcfinder/upload.php?opener=ckeditor&type=flash',

                //uploadUrl: "https://imageupload.localhost.com",
                uploadUrl: "https://imgupload.crowdwisdom.co.in",
                removeButtons: "EasyImageUpload,Copy,Paste,PasteText,PasteFromWord,Replace,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Subscript,Superscript,CopyFormatting,RemoveFormat,NumberedList,BulletedList,Outdent,Indent,Blockquote,CreateDiv,BidiLtr,BidiRtl,Language,Anchor,Flash,Smiley,SpecialChar,PageBreak,Iframe,Styles,Format,Font,FontSize,ShowBlocks,About,Save,NewPage,Preview,Print,Templates,Cut,Table,HorizontalRule,TextColor",
                extraPlugins: 'simpleImageUpload,easyimage',
                removePlugins: 'image',
                toolbarGroups: [
                    {name: 'document', groups: ['mode', 'document', 'doctools']},
                    {name: 'clipboard', groups: ['clipboard', 'undo']},
                    {name: 'editing', groups: ['find', 'selection', 'spellchecker', 'editing']},
                    {name: 'forms', groups: ['forms']},
                    {name: 'basicstyles', groups: ['basicstyles', 'cleanup']},
                    {name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph']},
                    {name: 'links', groups: ['links']},
                    {name: 'insert', groups: ['insert']},
                    {name: 'styles', groups: ['styles']},
                    {name: 'colors', groups: ['colors']},
                    {name: 'tools', groups: ['tools']},
                    {name: 'others', groups: ['others']},
                    {name: 'about', groups: ['about']}
                ],
                //cloudServices_uploadUrl: 'https://33333.cke-cs.com/easyimage/upload/',
                // Note: this is a token endpoint to be used for CKEditor 4 samples only. Images uploaded using this token may be deleted automatically at any moment.
                // To create your own token URL please visit https://ckeditor.com/ckeditor-cloud-services/.
                //cloudServices_tokenUrl: 'https://33333.cke-cs.com/token/dev/ijrDsqFix838Gh3wGO3F77FSW94BwcLXprJ4APSp3XQ26xsUHTi0jcb1hoBt',
                on:
                        {
                            instanceReady: function (evt)
                            {
                                var editor = "blog_desc_editor";
                                var base = "#blogdetailPage";
                                var blogid = $(base).attr("data-blogid");
                                if (blogid == "0") {
                                    $(base + "[name='blog_title']").val('');
                                    $(base + "[name='blog_description']").val('');
                                    $(base + "[name='blog_date']").val('');
                                    $(base + "[name='blog_img']").val('');
                                    $(base + "[name='meta_keywords']").val('');
                                    $(base + "[name='meta_description']").val('');
                                    $("select[name='blog_category']").prop("selectedIndex", 0);
                                    $('select[name="blog_category"]').selectpicker('refresh');
                                    $("select[name='blog_subcategory']").prop("selectedIndex", 0);
                                    $('select[name="blog_subcategory"]').selectpicker('refresh');
                                    //$("#blog_desc_editor").Editor("setText", "");
                                } else {
                                    var blog_date = convertDate(data.blog_date || data.created_date);
                                    $(base + " input[name='blogid']").val(blogid);
                                    $(base + " input[name='blog_title']").val(data.title).parent().addClass('focused');
                                    $(base + " img.blog-image").attr("src", data.image).attr("width", "100").attr("height", "100");
                                    // $(base + " #blog_desc_editor").Editor("setText", description)
                                    $(base + " [name='meta_keywords']").text((data.meta_keywords == null) ? "" : data.meta_keywords).parent().addClass('focused');
                                    $(base + " [name='meta_description']").text((data.meta_description == null) ? "" : data.meta_description).parent().addClass('focused');
                                    CKEDITOR.instances[editor].setData(data.description, {
                                        callback: function () {
                                            this.checkDirty(); // true
                                        }
                                    });
                                    $(base + " input[name='blog_date']").val(blog_date).parent().addClass('focused');
                                    $(base + " input[name='blog_img']").removeAttr('required');
                                    $(base + " select[name='blog_category']").val(data.category_id).selectpicker('refresh')
                                            .parent().addClass('focused');
                                    setTimeout(function () {
                                        $(base + ' select[name="blog_subcategory"]').val(data.sub_category_id)
                                                .selectpicker('refresh')
                                                .parent().addClass('focused');
                                    }, 100)
                                    $(base + ' select[name="blog_type"]')
                                            .val(data.type)
                                            .selectpicker('refresh')
                                    //.selectpicker('hide');
                                    //.closest(".form-group").hide();

                                }
                            }
                        }
            });

            
            $(document).ready(function(){

                var selectedTopicId = [];

                $('#search_topics').on('keyup',function(){

                    var topic = $(this).val();
                    console.log(topic.length);

                    if(topic && topic.length>=2){
                            $('.searched_topics').html('');
                        //alert(data);
                        $.ajax({
                            url: "/Poll/fetchdata",
                            method: "POST",
                            data:{p_category:topic, topics: JSON.stringify(selectedTopicId)},
                            dataType: "text",
                            success: function(data)
                            {
                                $('.searched_topics').append('');
                                var data1 = JSON.parse(data);

                                var addDivData = "";
                                //addDivData += '<ul class="suggestions">';
                                 $.each(data1, function (index, item) {
                                     /*console.log(value.id);
                                     console.log(value.text);*/

                                     // addDivData += "<li data-sug-id='" + item.id + "' data-sug-name='"+ item.topic +"'>" + item.topic + "</li>";
                                     //$('#result').append(option);
                                      $('.searched_topics').append( $("<div>", {class: "col-sm-12"})
                                .append($("<a />", {class: "foundtopic nav-link", href: "#", "data-id": item.id, "data-name": item.topic}).html(item.topic)

                                        ));

                                 });
                                 //addDivData += '</ul>';
                             
                                //$('.searched_topics').html(addDivData);
                            }
                        });
                    }

                    else {
                        $('.searched_topics').html("");
                    }


                   
                });

                // $('li').click(function(){
                //     var nameValue = $(this).attr("#data-sug-name");
                //     alert('Hi');
                //     $('#p_category').val(nameValue);
                // });
                $(document).on('click', 'a.foundtopic', function (e) {
                    e.preventDefault();
                    var addId = $(this).attr('data-id');
                    var selected = $("<div>", {class: "btn bg-teal m-t-5 m-r-10 selected-topic"})
                            .append('<input type="hidden" name="topics[]" value="' + $(this).attr('data-id') + '" data-id="' + $(this).attr('data-id') + '">' + $(this).attr('data-name'))
                            .append($("<i>", {class: "cancel", style: "cursor:pointer"}).html('&nbsp; &times;')
                                    )


                    $(this).closest('.searched_topics').parent();
                    $('.selected_topics').show();
                    $('.selected_topics .row').append(selected);
                    $("#search_topics").val('').trigger("keyup");
                    //$("#is_topic_change").val('1');
                    selectedTopicId.push(addId);
                    $(".error-topics").html('');
                });

                    $(document).on('click', '.selected_topics .cancel', function (e) {
                    $(this).closest('.selected-topic').remove();
                    var index = selectedTopicId.indexOf($(this).prev().attr('data-id'));
                    if (index > -1) {
                        selectedTopicId.splice(index, 1);
                        //$("#is_topic_change").val('1');
                    }
                });




            });


        });
</script>




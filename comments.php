<div class="d-none d-xl-block" style="height: 50px"></div> 
<div id="comments" class="content-area col-xl-8 mx-auto padding-0   ">

  <?php wp_list_comments(); ?>

  <?php comment_form(

    $args = array(
      'id_form'           => 'commentform textmain',
      'id_submit'         => 'commentsubmit',
	  'class_submit' => 'btn-sm  bgone bodmain textmain rounded-0',       
	  'title_reply'       => __('Leave a Comment', 'wpt'),
      'title_reply_to'    => __('Leave a Comment to %s', 'wpt'),
      'cancel_reply_link' => __('Cancel Commnet', 'wpt'),
      'comment_field' =>  '<p><textarea placeholder="Start typing..." id="comment" class="form-control" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
      'comment_notes_after' => '<p class="form-allowed-tags">' .
        __('You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:', 'wpt') .
        '</p><div class="alert alert-info">' . allowed_tags() . '</div>'
    )
  );
  ?>

</div>
<div class="d-none d-xl-block" style="height: 50px"></div> 
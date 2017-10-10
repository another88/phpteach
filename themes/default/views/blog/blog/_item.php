<div class="row">
  <div class="col-md-4" style="height:328px;background-size: cover;background-repeat: no-repeat;background-image: url( <?php echo $data->getImageUrl(328, 255); ?>)">
    <div class="col-sm-12 blog-info">

        <h2><?= CHtml::link(
                CHtml::encode($data->name),
                ['/blog/blog/view/', 'slug' => CHtml::encode($data->slug)]
            ); ?></h2>
        <span><?= CHtml::image(
            $data->createUser->getAvatar(24),
            CHtml::encode($data->createUser->nick_name)
        ); ?> <?= CHtml::link(
            CHtml::encode($data->createUser->nick_name),
            ['/user/people/userInfo', 'username' => CHtml::encode($data->createUser->nick_name)]
        ); ?> </span>
        <span> <i class="glyphicon glyphicon-calendar"></i> <?= Yii::app()->getDateFormatter()->formatDateTime(
                $data->create_time,
                "long",
                false
            ); ?> </span>
        <span> <i class="glyphicon glyphicon-pencil"></i> <?= CHtml::link(
                CHtml::encode($data->postsCount),
                ['/blog/post/blog/', 'slug' => CHtml::encode($data->slug)]
            ); ?> </span>
        <span> <i class="glyphicon glyphicon-user"></i> <?= CHtml::link(
                CHtml::encode($data->membersCount),
                ['/blog/blog/members', 'slug' => CHtml::encode($data->slug)]
            ); ?> </span>
        <span> <?= strip_tags($data->description); ?> </span>
      <?php $this->widget(
        'application.modules.blog.widgets.JoinBlogWidget',
        ['user' => Yii::app()->getUser(), 'blog' => $data]
      ); ?>
    </div>

  </div>
</div>
<hr/>

<div class="container">
  <div class="profile">
    <div class="rows">
      <div class="profile_img">
        <!-- 自分のプロフィール画像（なければ初期設定でこちらから用意） -->
      </div>
      <div class="profile_text">
        <h2><?php echo h($user['User']['username']); ?></h2>
        <?php
        echo $user['User']['job'];
        echo $user['User']['gender'];
        echo $user['User']['old'];
        ?>
        <?php echo $user['User']['programin_lang']; ?>
        <?php echo $this->Html->link('プロフィール編集', array('controller' => 'users', 'action' => 'edit', $user['User']['id'])); ?>
      </div>
    </div>
  </div>
  <div class="rows">
    <div><!-- 自分に関する講師情報 -->
      <div class="myteachers">
        <!-- 自分の講師一覧表示 -->
      </div>
      <div class="newteachers">
        <!-- 新着講師情報 -->
      </div>
    </div>
    <div><!-- サイドバー -->
    </div>
  </div>
</div>

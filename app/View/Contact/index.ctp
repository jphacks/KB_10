<?php
$document = "「個人情報の取扱いについて」ご確認の上、送信ボタンを押してください。

個人情報の取扱いについて

1.事業者の名称
株式会社ＡＰパートナーズ

2.当社の個人情報管理者
個人情報保護管理者：大森　和徳

3.連絡先
電話：0120-341-888
Eメール： info@appart.co.jp

4.利用目的
1)当社のサービスに関するお問い合せに回答するため
2)当社への求人を受け付けるため。

5.第三者提供    法令等の定めに基づく場合を除き、当社で上記目的に使用するだけで、他に提供いたしません。

6.委託  第三者への委託はいたしません。

7.提供の任意性とその結果
個人情報を提供するか否かは任意ですが、必須項目の記載がない場合には回答をお送りすることができないおそれがあります。

8.個人情報の開示等の要求
貴殿から以下の求めがあった場合には以下の通り応じます。個人情報保護管理者へ連絡して、「個人情報開示等依頼書（本人依頼用）」を請求後、記載して手続を行なってください。

①利用目的の通知を求められた場合には遅滞なく応じます。
②本人が識別される個人情報の開示を求められた場合には遅滞なく書面により開示いたします。
③本人が識別される個人情報の訂正、追加または削除（以下、訂正等という）を求められた場合には遅滞なく必要な調査を行い、その結果に基づいて訂正等を行い、その旨および内容（訂正等に応じなか
った場合を含む）を遅滞なく通知いたします。
④本人が識別される個人情報の利用の停止、消去または第三者への提供の停止（以下、利用停止等という）を求められた場合にはこれに応じ、その旨（利用停止等に応じなかった場合を含む）を遅滞なく
通知いたします。
⑤利用目的の通知または開示対象個人情報の開示に応じる場合でも、手数料は徴収いたしません。
その他  本ページは、SSL通信に対応しております。";

echo $this->Session->flash();

echo $this->Form->create('Contact');

echo $this->Form->input('subject', array(
        'type' => 'select',
        'label' => 'お問い合わせ項目',
        'options' => array("サービスに関して" => "サービスに関して","講師登録に関して" => "講師登録に関して","受講生登録に関して" => "受講生登録に関して", "その他" => "その他")
        )
        );

echo $this->Form->input('name', array(
        'type' => 'text',
        'label' => 'お名前',
        'maxlength' => 255,
      )
          );


echo $this->Form->input('kana', array(
       'type' => 'text',
       'label' => 'お名前（カタカナ）',
       'maxlength' => 255,
       )
    );


echo $this->Form->input('email', array(
       'type' => 'email',
       'label' => 'メールアドレス',
       'maxlength' => 255,
       )
    );

echo $this->Form->input('confirm', array(
       'type' => 'email',
       'label' => 'メールアドレス（確認）',
       'maxlength' => 255,
       )
   );

echo $this->Form->input('body', array(
       'type' => 'textarea',
       'label' => 'お問い合わせ内容',
       'maxlength' => 3000,
       )
   );

echo $this->Form->input('document', array(
       'type' => 'textarea',
       'label' => '個人情報の取り扱いについて',
       'maxlength' => 1000,
       'value' => $document,
       'disabled' => 'disabled'
       )
   );

echo $this->Form->input('agreement', array(
   'type' => 'checkbox',
   'label' => '「個人情報の取り扱い」について同意する。',
 )
);
echo $this->Form->submit('確認する', array('name' => 'confirm'));
echo $this->Form->end();

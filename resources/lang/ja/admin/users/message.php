<?php

return array(

    'accepted'                  => 'この資産を承認しました。',
    'declined'                  => 'この資産を却下しました。',
    'user_exists'               => '利用者が既に存在しています!',
    'user_not_found'            => '利用者 [:id] は、存在していません。',
    'user_login_required'       => 'ログインフィールドが必要です。',
    'user_password_required'    => 'パスワードが必要です。',
    'insufficient_permissions'  => '権限が不足しています。',
    'user_deleted_warning'      => '利用者が削除されました。これらを編集するにはユーザーを復旧するか、新しい資産を割り当てなければなりません。',
    'ldap_not_configured'        => 'LDAPの統合は、インストール時に設定されません。',


    'success' => array(
        'create'    => '利用者が正常に作成されました。',
        'update'    => '利用者が正常に更新されました。',
        'delete'    => '利用者が正常に削除されました。',
        'ban'       => '利用者が正常に禁止されました。',
        'unban'     => '利用者が正常に解禁されました。',
        'suspend'   => 'ユーザーが正常に中断されました。',
        'unsuspend' => 'ユーザーは正常に再開しました。',
        'restored'  => '利用者が復元されました。',
        'import'    => '利用者が正常にインポートされました。',
    ),

    'error' => array(
        'create' => '利用者を作成する際に問題が発生しました。もう一度、やり直して下さい。',
        'update' => '利用者を更新する際に問題が発生しました。もう一度、やり直して下さい。',
        'delete' => '利用者を削除する際に問題が発生しました。もう一度、やり直して下さい。',
        'unsuspend' => '利用者を再開する際に問題が発生しました。もう一度、やり直して下さい。',
        'import'    => '利用者をインポートする際に問題が発生しました。もう一度、やり直して下さい。',
        'asset_already_accepted' => 'この資産は既に承認されています。',
        'accept_or_decline' => 'あなたはこの資産を承認もしくは却下しなけれなばなりません。',
        'incorrect_user_accepted' => 'The asset you have attempted to accept was not checked out to you.',
        'ldap_could_not_connect' => 'LDAPサーバーに接続できません。LDAP設定ファイル内のサーバー設定を確認して下さい。<br> LDAPサーバーからのエラー:',
        'ldap_could_not_bind' => 'LDAPサーバーにバインドできません。LDAP設定ファイル内のサーバー設定を確認して下さい。<br> LDAPサーバーからのエラー: ',
        'ldap_could_not_search' => 'LDAPサーバーを検索できません。LDAP設定ファイル内のサーバー設定を確認して下さい。<br> LDAPサーバーからのエラー:',
        'ldap_could_not_get_entries' => 'LDAPサーバーからエンティティを取得できません。LDAP設定ファイル内のサーバー設定を確認して下さい。<br> LDAPサーバーからのエラー:',
    ),

    'deletefile' => array(
        'error'   => 'ファイルが削除できませんでした。もう一度、やり直して下さい。',
        'success' => 'ファイルは正常に削除されました。',
    ),

    'upload' => array(
        'error'   => 'ファイルがアップロードできませんでした。もう一度、やり直して下さい。',
        'success' => 'ファイルが正常にアップロードされました。',
        'nofiles' => 'アップロードするためのファイルを選択していません。',
        'invalidfiles' => 'いずれかのファイルが大き過ぎるか、ファイルタイプが許可されていません。許可されているファイルタイプ（png, gif, jpg, doc, docx, pdf, and txt）',
    ),

);

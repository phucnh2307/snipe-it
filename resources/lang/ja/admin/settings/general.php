<?php

return [
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Active Directory ドメイン',
    'ad_domain_help'			=> '通常はemailのドメイン名と同じです。ただし例外あり',
    'ad_append_domain_label'    => 'ドメイン名を追加',
    'ad_append_domain'          => 'ユーザー名フィールドにドメイン名を追加',
    'ad_append_domain_help'     => 'ユーザーは "username@domain.local" を記述する必要はなく、"username" と入力するだけです。',
    'admin_cc_email'            => 'CC（カーボンコピー）メール 送信先',
    'admin_cc_email_help'       => 'ユーザーに送信されたチェックイン/チェックアウト　メールのコピーを追加の電子メールアカウントに送信する場合は、ここにメールアドレスを入力します。必要が無ければ、このフィールドを空白にします',
    'is_ad'				        => 'Active Directory サーバー',
    'alerts'                	=> 'アラート',
    'alert_title'               => 'アラート設定を更新',
    'alert_email'				=> 'アラートの送信先',
    'alert_email_help'    => 'アラートの送信先となるメールアドレス(カンマ区切り)。',
    'alerts_enabled'			=> 'アラートを有効化',
    'alert_interval'			=> 'アラートを無視する期間',
    'alert_inv_threshold'		=> 'インベントリのアラート間隔',
    'allow_user_skin'           => 'ユーザースキン許可',
    'allow_user_skin_help_text' => 'このチェックボックスをオンにすると、ユーザーはUIスキンを別のものに上書きすることができます。',
    'asset_ids'					=> '資産ID',
    'audit_interval'            => '監査の間隔',
    'audit_interval_help'       => '定期的に資産を物理的に監査する必要がある場合、使用する間隔を月単位で入力します。この値を更新すると、監査日が迫っている資産の「次回監査日」がすべて更新されます。',
    'audit_warning_days'        => '監査警告しきい値',
    'audit_warning_days_help'   => '資産の監査期限は何日前に警告する必要がありますか？',
    'auto_increment_assets'		=> '資産タグを自動採番で生成',
    'auto_increment_prefix'		=> 'プレフィクス (オプション)',
    'auto_incrementing_help'    => 'この初期値を使って資産タグの自動採番を有効化',
    'backups'					=> 'バックアップ',
    'backups_help'              => 'バックアップの作成、ダウンロード、および復元 ',
    'backups_restoring'         => 'バックアップから復元中',
    'backups_upload'            => 'バックアップをアップロード',
    'backups_path'              => 'サーバー上のバックアップは <code>:path</code> に保存されています',
    'backups_restore_warning'   => '以前のバックアップから復元する場合は、復元ボタン <i class="text-white fas fa-retweet" aria-hidden="true"> を使用します。(S3ファイルストレージやDockerでは、現在動作しません。)

<strong>:app_name データベース全体とアップロードされたファイルは、バックアップファイルの内容と完全に置き換わります。 </strong>  ',
    'backups_logged_out'         => 'あなたを含むすべての既存のユーザーは、復元が完了するとログアウトされます。',
    'backups_large'             => '非常に大きなバックアップは、復元時にタイムアウトする可能性があり、コマンドラインを介して実行する必要があります。 ',
    'barcode_settings'			=> 'バーコード設定',
    'confirm_purge'			    => 'パージを確定',
    'confirm_purge_help'		=> '削除したレコードを削除するには、下のボックスに「DELETE」というテキストを入力します。 この操作は元に戻すことができず、ソフトで削除されたすべてのアイテムとユーザーは完全に削除されます。(安全のために最初にバックアップを行う必要があります。)',
    'custom_css'				=> 'カスタム CSS:',
    'custom_css_help'			=> '使用したいカスタムCSSを入力してください。&lt;style&gt;&lt;/style&gt; タグは含めないでください',
    'custom_forgot_pass_url'	=> 'パスワードリセットURLを変更する',
    'custom_forgot_pass_url_help'	=> 'これにより、ログイン画面に表示されるパスワードリセット用のURLが置き換えられ、内部またはホストされているLDAPパスワードのリセット機能にユーザーを誘導するのに役立ちます。ローカルユーザーがパスワードを忘れた場合、その機能は無効になります。',
    'dashboard_message'			=> 'ダッシュボードメッセージ',
    'dashboard_message_help'	=> 'このテキストは、ダッシュボード表示権限を持つすべての人に表示されます。',
    'default_currency'  		=> '既定の通貨',
    'default_eula_text'			=> '既定のEULA',
    'default_language'			=> '既定の言語',
    'default_eula_help_text'	=> '特殊な資産カテゴリーにカスタムEULAを関連付けられます。',
    'display_asset_name'        => '資産名を表示',
    'display_checkout_date'     => 'チェックアウト日を表示',
    'display_eol'               => '表形式でEOLを表示',
    'display_qr'                => 'QRコードを表示',
    'display_alt_barcode'		=> 'バーコードを表示',
    'email_logo'                => 'メールのロゴ',
    'barcode_type'				=> '2次元バーコードタイプ',
    'alt_barcode_type'			=> 'バーコードタイプ',
    'email_logo_size'       => '電子メールでは正方形のロゴが見栄えよく見えます。 ',
    'enabled'                   => '有効',
    'eula_settings'				=> 'EULA設定',
    'eula_markdown'				=> 'この EULA は、<a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>で、利用可能です。',
    'favicon'                   => 'ファビコン',
    'favicon_format'            => '許可されているファイル形式は、ico、png、および gif です。他の画像形式は、すべてのブラウザで動作しない可能性があります。',
    'favicon_size'          => 'ファビコンは16x16 ピクセルの正方形の画像である必要があります。',
    'footer_text'               => '追加のフッターテキスト ',
    'footer_text_help'          => 'このテキストは右側のフッターに表示されます。 <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>を使用してリンクが作成できます。改行、ヘッダー、画像などは、予期しない表示結果になる可能性があります。',
    'general_settings'			=> '全般設定',
    'general_settings_keywords' => '会社のサポート, 署名, 受諾, 電子メール形式, ユーザー名形式, ページあたりの画像, サムネイル, EULA, 利用規約, ダッシュボード, プライバシー',
    'general_settings_help'     => 'デフォルトのEULAなど',
    'generate_backup'			=> 'バックアップを作成',
    'header_color'              => 'ヘッダーカラー',
    'info'                      => 'これらの設定は、あなたの設備の特性に合わせてカスタマイズできます。',
    'label_logo'                => 'ラベルのロゴ',
    'label_logo_size'           => 'ロゴは各アセットラベルの右上に表示されます。形は正方形が最良です。 ',
    'laravel'                   => 'Laravelバージョン',
    'ldap'                      => 'LDAP',
    'ldap_help'                 => 'LDAP/Active Directory',
    'ldap_client_tls_key'       => 'LDAPクライアントTLSキー',
    'ldap_client_tls_cert'      => 'LDAPクライアントサイドTLS証明書',
    'ldap_enabled'              => 'LDAP 対応',
    'ldap_integration'          => 'LDAP 統合',
    'ldap_settings'             => 'LDAP 設定',
    'ldap_client_tls_cert_help' => 'クライアント側のTLS証明書とLDAP接続用のキーは、通常 "Secure LDAP" を搭載したGoogle Workspaceでのみ有効です。',
     'ldap_client_tls_key'       => 'LDAPクライアントTLSキー',
    'ldap_login_test_help'      => 'LDAPログインが正しく構成されているかどうかをテストするために、上で指定したベースDNから有効なLDAPユーザー名とパスワードを入力して下さい。その前に必ず更新後のLDAP設定を保存しておいてください。',
    'ldap_login_sync_help'      => 'これは、LDAPが正しく同期できることをテストするだけです。 LDAP認証クエリが正しくない場合、ユーザーはまだログインできない場合があります。その前に必ず更新後のLDAP設定を保存しておいてください。',
    'ldap_manager'              => 'LDAPマネージャー',
    'ldap_server'               => 'LDAP サーバ',
    'ldap_server_help'          => 'LDAP を使用開始 ldap:// (for unencrypted or TLS) or ldaps:// (for SSL)',
    'ldap_server_cert'			=> 'LDAP SSL 認証',
    'ldap_server_cert_ignore'	=> '無効な SSL 証明書を許可します。',
    'ldap_server_cert_help'		=> '自己署名 SSL 証明書を使用して無効な SSL 証明書を受け入れたい場合は、このチェック ボックスを選択します。',
    'ldap_tls'                  => 'TLS の使用',
    'ldap_tls_help'             => 'これは、LDAP サーバーで STARTTLS を実行している場合にのみチェック必要があります。 ',
    'ldap_uname'                => 'LDAP バインド ユーザー名',
    'ldap_dept'                 => 'LDAP 部署',
    'ldap_phone'                => 'LDAP 電話番号',
    'ldap_jobtitle'             => 'LDAP 職位',
    'ldap_country'              => 'LDAP 国',
    'ldap_pword'                => 'LDAP バインド パスワード',
    'ldap_basedn'               => 'LDAP 検索ベース DN',
    'ldap_filter'               => 'LDAP フィルター',
    'ldap_pw_sync'              => 'LDAP パスワード同期',
    'ldap_pw_sync_help'         => 'LDAPパスワードをローカルパスワードと同期させない場合は、このチェックボックスをオフにします。これをオフにすると、何らかの理由でLDAPサーバーにアクセスできない場合、ユーザーがログインできなくなる可能性があります。',
    'ldap_username_field'       => 'ユーザー名フィールド',
    'ldap_lname_field'          => '苗字',
    'ldap_fname_field'          => 'LDAP First Name',
    'ldap_auth_filter_query'    => 'LDAP 認証クエリ',
    'ldap_version'              => 'LDAP バージョン',
    'ldap_active_flag'          => 'LDAP アクティブ フラグ',
    'ldap_activated_flag_help'  => 'This value is used to determine whether a synced user can login to Snipe-IT. <strong>It does not affect the ability to check items in or out to them</strong>, and should be the <strong>attribute name</strong> within your AD/LDAP, <strong>not the value</strong>. <br><br>If this field is set to a field name that does not exist in your AD/LDAP, or the value in the AD/LDAP field is set to <code>0</code> or <code>false</code>, <strong>user login will be disabled</strong>. If the value in the AD/LDAP field is set to <code>1</code> or <code>true</code> or <em>any other text</em> means the user can log in. When the field is blank in your AD, we respect the <code>userAccountControl</code> attribute, which usually allows non-suspended users to log in.',
    'ldap_emp_num'              => 'LDAP 社員番号',
    'ldap_email'                => 'LDAP メール',
    'ldap_test'                 => 'LDAPをテスト',
    'ldap_test_sync'            => 'LDAP同期のテスト',
    'license'                   => 'ソフトウェアライセンス',
    'load_remote_text'          => 'リモートスクリプト',
    'load_remote_help_text'		=> 'Snipe-ITのインストールは、外部からスクリプトを読み込むことが可能です。',
    'login'                     => 'ログイン試行',
    'login_attempt'             => 'ログイン試行',
    'login_ip'                  => 'IPアドレス',
    'login_success'             => '成功可否',
    'login_user_agent'          => 'User Agent',
    'login_help'                => 'ログイン試行の一覧',
    'login_note'                => 'ログインメッセージ',
    'login_note_help'           => 'オプションで、紛失または盗難されたデバイスを見つけた人を支援するなど、ログイン画面に文章を表示することができます。このフィールドは<a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>が使用できます。',
    'login_remote_user_text'    => 'リモートユーザのログインオプション',
    'login_remote_user_enabled_text' => 'リモートユーザーのログインヘッダーを有効にする',
    'login_remote_user_enabled_help' => 'このオプションを使用すると、「Common Gateway Interface（rfc3875）」のREMOTE_USERヘッダーを介した認証が有効になります。',
    'login_common_disabled_text' => 'その他の認証を無効にします。',
    'login_common_disabled_help' => '他の認証を無効にします。 REMOTE_USERログインが既に動作していることが確かである場合だけ、このオプションを有効にしてください。',
    'login_remote_user_custom_logout_url_text' => 'カスタムログアウトURL',
    'login_remote_user_custom_logout_url_help' => 'ユーザがログアウトした場合、このURLにリダイレクトします。
これは認証プロバイダのセッションを正しく終了させる場合に便利です。',
    'login_remote_user_header_name_text' => 'カスタムユーザー名ヘッダー',
    'login_remote_user_header_name_help' => 'REMOTE_USER の代わりに指定されたヘッダーを使用する',
    'logo'                    	=> 'ロゴ',
    'logo_print_assets'         => '印刷に使用',
    'logo_print_assets_help'    => '印刷可能な資産リストにブランドを使用する。 ',
    'full_multiple_companies_support_help_text' => 'ユーザー (管理者を含む) に 資産の割り当て を制限します。',
    'full_multiple_companies_support_text' => '複数企業をサポートします。',
    'show_in_model_list'   => 'モデルのドロップダウンに表示',
    'optional'					=> 'オプション',
    'per_page'                  => 'ページ毎の結果',
    'php'                       => 'PHPバージョン',
    'php_info'                  => 'PHPの情報',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, system, info',
    'php_overview_help'         => 'PHPシステム情報',
    'php_gd_info'               => 'QRコードを表示するためにphp-gdをインストールする必要があります。インストールインストラクションを参照して下さい。',
    'php_gd_warning'            => 'PHP Image Processing および GD plugin が、インストールされていません。',
    'pwd_secure_complexity'     => 'パスワードの複雑さ',
    'pwd_secure_complexity_help' => 'どのパスワード複雑性ルールを適用するかを選択します。',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'パスワードは名前、苗字、メールアドレス、またはユーザー名と同じにすることはできません',
    'pwd_secure_complexity_letters' => '少なくとも1文字以上が必要です',
    'pwd_secure_complexity_numbers' => '少なくとも1つの数字が必要です',
    'pwd_secure_complexity_symbols' => '少なくとも1つの記号が必要です',
    'pwd_secure_complexity_case_diff' => '少なくとも1つの大文字と小文字が必要です',
    'pwd_secure_min'            => 'パスワードの最低文字数',
    'pwd_secure_min_help'       => '最小値は8です',
    'pwd_secure_uncommon'       => '共通パスワードを防ぐ',
    'pwd_secure_uncommon_help'  => '不正アクセス等でに報告された上位10,000個の共通パスワードを、ユーザーが使用できなくなります。',
    'qr_help'                   => 'QRコードを有効化',
    'qr_text'                   => 'QRコードテキスト',
    'saml'                      => 'SAML',
    'saml_title'                => 'SAML設定を更新',
    'saml_help'                 => 'SAML設定',
    'saml_enabled'              => 'SAMLを有効にする',
    'saml_integration'          => 'SAML 統合',
    'saml_sp_entityid'          => 'Entity ID',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => '公開証明書',
    'saml_sp_metadata_url'      => 'メタデータURL',
    'saml_idp_metadata'         => 'SAML IdPメタデータ',
    'saml_idp_metadata_help'    => 'URL または XML ファイルを使用して IdP メタデータを指定できます。',
    'saml_attr_mapping_username' => '属性マッピング - ユーザー名',
    'saml_attr_mapping_username_help' => '属性マッピングが指定されていない、または無効な場合 NameID が使用されます。',
    'saml_forcelogin_label'     => 'SAML Force Login',
    'saml_forcelogin'           => 'SAMLをプライマリログインにする',
    'saml_forcelogin_help'      => '通常のログインページに移動するには、\'/login?nosaml\' を使用できます。',
    'saml_slo_label'            => 'SAML シングルログアウト',
    'saml_slo'                  => 'ログアウト時にLogoutRequestをIdPに送信する',
    'saml_slo_help'             => 'これにより、ユーザーは最初にログアウト時にIdPにリダイレクトされます。IdPがSP-initiated SAML SLOを正しくサポートしていない場合は、チェックを外してください。',
    'saml_custom_settings'      => 'SAML カスタム設定',
    'saml_custom_settings_help' => 'onelogin/php-saml ライブラリの追加の設定を指定できます。自己責任で使用してください。',
    'saml_download'             => 'メタデータをダウンロード',
    'setting'                   => '設定',
    'settings'                  => '設定',
    'show_alerts_in_menu'       => 'トップ メニューでアラートを表示します。',
    'show_archived_in_list'     => 'アーカイブ資産',
    'show_archived_in_list_text'     => 'アーカイブされた資産を「すべての資産」リストに表示する',
    'show_assigned_assets'      => 'アセットに割り当てられたアセットを表示',
    'show_assigned_assets_help' => '他のアセットに割り当てたアセットを表示するには、 ユーザーの表示 → 資産, ユーザーの表示 → 情報 → アカウントに割り当て済み → 割り当て済みの資産',
    'show_images_in_email'     => 'メールで画像を表示する',
    'show_images_in_email_help'   => 'Snipe-ITが閉鎖されたネットワーク内にある場合や、アクセスするためにVPNの利用が必要な場合はこのボックスのチェックを外してください。ネットワーク外のユーザは、配信されたメールにある画像を読み込むことはできません。',
    'site_name'                 => 'サイト名',
    'slack'                     => 'Slack',
    'slack_title'               => 'Slackの設定を更新',
    'slack_help'                => 'Slackの設定',
    'slack_botname'             => 'Slack Botname',
    'slack_channel'             => 'Slack Channel',
    'slack_endpoint'            => 'Slack Endpoint',
    'slack_integration'         => 'Slack Settings',
    'slack_integration_help'    => 'Slackとの連携は任意ですが、利用する場合はエンドポイントとチャンネルが必要です。Slackとの連携を設定するには、まず、Slackに<a href=":slack_link" target="_new" rel="noopener">Incoming Webhookを作成</a>する必要があります。<strong>Slack統合テスト</strong> ボタンをクリックし、設定が正しいことを確認してから保存してください。 ',
    'slack_integration_help_button'    => 'Slack設定を保存すると、テストボタンが表示されます。',
    'slack_test_help'           => 'Slackが正しく設定されているかどうかをテストします。先にSlackの設定を最初に保存しなければなりません。',
    'snipe_version'  			=> 'Snipe-IT バージョン',
    'support_footer'            => 'フッターのリンクをサポートします。 ',
    'support_footer_help'       => 'Snipe-ITサポート情報とユーザーマニュアルへのリンクを確認する',
    'version_footer'            => 'フッターにバージョン情報を表示 ',
    'version_footer_help'       => 'Snipe-ITのバージョンとビルド番号を表示するか、管理者のみに表示させるかを設定できます。',
    'system'                    => 'システム情報',
    'update'                    => '設定を更新',
    'value'                     => '価値',
    'brand'                     => 'ブランディング',
    'brand_keywords'            => 'footer, logo, print, theme, skin, header, colors, color, css',
    'brand_help'                => 'ロゴ, サイト名',
    'web_brand'                 => 'Webブランディングタイプ',
    'about_settings_title'      => '設定について',
    'about_settings_text'       => 'これらの設定は、あなたのインストレーションの特性に合わせてカスタマイズできます。',
    'labels_per_page'           => 'ページあたりのラベル数',
    'label_dimensions'          => 'ラベルの大きさ (インチ)',
    'next_auto_tag_base'        => '次の自動インクリメント',
    'page_padding'              => 'ページ マージン',
    'privacy_policy_link'       => 'プライバシーポリシーへのリンク',
    'privacy_policy'            => 'プライバシーポリシー',
    'privacy_policy_link_help'  => 'ここにURLが含まれている場合、プライバシーポリシーへのリンクは、GDPRに準拠して、各ページのフッターとシステムが送信する電子メールに含まれます。 ',
    'purge'                     => 'データレコードを消去',
    'purge_deleted'             => '削除の消去 ',
    'labels_display_bgutter'    => 'ラベル 下余白',
    'labels_display_sgutter'    => 'ラベル横余白',
    'labels_fontsize'           => 'ラベルフォントサイズ',
    'labels_pagewidth'          => 'ラベルシート幅',
    'labels_pageheight'         => 'ラベルシート高さ',
    'label_gutters'        => 'ラベルの間隔 (インチ)',
    'page_dimensions'        => 'ページサイズ（インチ）',
    'label_fields'          => 'ラベル表示フィールド',
    'inches'        => 'インチ',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Snipe-ITへのリンク',
    'show_url_in_emails_help_text'      => '電子メールのフッターでSnipe-ITのインストールにリンクしたくない場合は、このボックスのチェックを外してください。ほとんどのユーザーが決してログインしない場合に便利です。',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'サムネイルの最大の高さ',
    'thumbnail_max_h_help'   => 'サムネイルのリストビューに表示される最大の高さ。25～500。',
    'two_factor'        => '2段階認証',
    'two_factor_secret'        => '二段階認証コード',
    'two_factor_enrollment'        => '二段階認証登録',
    'two_factor_enabled_text'        => '二段階認証を有効',
    'two_factor_reset'        => '二段階認証をリセット',
    'two_factor_reset_help'        => 'ユーザーはGoogle Authenticatorでデバイスを再度登録する必要があります。これは、現在登録されているデバイスを紛失または盗難した場合に便利です。 ',
    'two_factor_reset_success'          => '二段階認証は正常にリセットされました。',
    'two_factor_reset_error'          => '二段階認証のデバイスリセットに失敗しました。',
    'two_factor_enabled_warning'        => '二段階認証を有効にすると、Google Authenticatorでの認証が強制されます。あなたがお持ちのデバイスを登録することができます。',
    'two_factor_enabled_help'        => 'これにより、Google Authenticatorを使用した2要素認証が有効になります。',
    'two_factor_optional'        => '選択可能(ユーザーは自由に有効・無効にできます)',
    'two_factor_required'        => '全てのユーザーに必須',
    'two_factor_disabled'        => '無効',
    'two_factor_enter_code'	=> '二段階認証コードを入力',
    'two_factor_config_complete'	=> '送信',
    'two_factor_enabled_edit_not_allowed' => '管理者はこの設定を編集することを許可していません。',
    'two_factor_enrollment_text'	=> "二段階認証の登録が必要ですが、あなたのデバイスはまだ登録されていません。Google Authenticatorアプリを開き、下のQRコードをスキャンして端末を登録してください。端末を登録したら以下のコードを入力してください。",
    'require_accept_signature'      => 'シグネチャリクエスト',
    'require_accept_signature_help_text'      => 'この機能を有効にするには、ユーザーが資産を受け入れる際に物理的にサインオフする必要があります。',
    'left'        => '左',
    'right'        => '右',
    'top'        => '上',
    'bottom'        => '下',
    'vertical'        => '垂直',
    'horizontal'        => '水平方向',
    'unique_serial'                => '一意のシリアル番号',
    'unique_serial_help_text'                => 'このチェックボックスをオンにすると、資産のシリアル番号に一意性制約が適用されます',
    'zerofill_count'        => '資産タグの長さ (ゼロ埋め含む)',
    'username_format_help'   => 'この設定は、ユーザー名が指定されておらず、ユーザー名を生成する必要がある場合にのみインポートプロセスで使用されます。',
    'oauth_title' => 'OAuth API 設定',
    'oauth' => 'OAuth',
    'oauth_help' => 'OAuth エンドポイント設定',
    'asset_tag_title' => '資産タグ設定を更新',
    'barcode_title' => 'バーコード設定を更新',
    'barcodes' => 'バーコード',
    'barcodes_help_overview' => 'バーコード &amp; QRの設定',
    'barcodes_help' => 'キャッシュされたバーコードを削除しようとします。 これは通常、バーコード設定が変更された場合や、Snipe-ITのURLが変更された場合にのみ使用されます。 バーコードは次にアクセスしたときに再生成されます。',
    'barcodes_spinner' => 'ファイルを削除しようとしています...',
    'barcode_delete_cache' => 'バーコードキャッシュを削除',
    'branding_title' => 'ブランディング設定を更新',
    'general_title' => '一般設定を更新',
    'mail_test' => '送信テスト',
    'mail_test_help' => 'テストメールを :replyto に送信しようとします。',
    'filter_by_keyword' => 'キーワードを設定してフィルター',
    'security' => 'セキュリティ',
    'security_title' => 'セキュリティ設定を更新',
    'security_keywords' => 'password, passwords, requirements, two factor, two-factor, common passwords, remote login, logout, authentication',
    'security_help' => '二段階認証, パスワードの制限',
    'groups_keywords' => 'permissions, permission groups, authorization',
    'groups_help' => 'アカウント権限グループ',
    'localization' => 'ローカライズ',
    'localization_title' => 'ローカライズ設定を更新',
    'localization_keywords' => 'localization, currency, local, locale, time zone, timezone, international, internatinalization, language, languages, translation',
    'localization_help' => '言語, 日付表示',
    'notifications' => '通知',
    'notifications_help' => 'メールアラート, 監査設定',
    'asset_tags_help' => '増分とプレフィクス',
    'labels' => 'ラベル',
    'labels_title' => 'ラベル設定を更新',
    'labels_help' => 'ラベルサイズ &amp; 設定',
    'purge' => '消去',
    'purge_keywords' => '恒久的に削除',
    'purge_help' => '削除したレコードを消去',
    'ldap_extension_warning' => 'このサーバーでは、LDAP 拡張モジュールがインストールされていないか、または有効になっていないようです。設定を保存することはできますが、LDAPの同期やログインを機能させるために、PHPのLDAP拡張モジュールを有効にする必要があります。',
    'ldap_ad' => 'LDAP/AD',
    'employee_number' => '従業員番号',
    'create_admin_user' => 'ユーザーを作成 ::',
    'create_admin_success' => '成功！管理者ユーザーが追加されました！',
    'create_admin_redirect' => 'アプリのログインに行くにはここをクリック！',
    'setup_migrations' => 'データベースマイグレーション ::',
    'setup_no_migrations' => 'マイグレーションするものがありませんでした。データベーステーブルは既に設定されています！',
    'setup_successful_migrations' => 'データベーステーブルが作成されました',
    'setup_migration_output' => 'マイグレーション出力:',
    'setup_migration_create_user' => '次へ: ユーザーの作成',
    'ldap_settings_link' => 'LDAP設定ページ',
    'slack_test' => '<i class="fab fa-slack"></i> 統合テスト',
];

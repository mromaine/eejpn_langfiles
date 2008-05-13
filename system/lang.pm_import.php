<?php

$L = array(

//----------------------------
// pM Imoprt
//----------------------------

"standby" =>
"インポート中です... お待ちください...",

"import_complete" =>
"インポートが完了しました。",

"forum_name" =>
"フォーラム名:",

"posts_remaining" =>
"残りを投稿（ポスト）:",

"import_forum_posts" =>
"フォーラム投稿をインポート",

"forum_destination_instructions" =>
"投稿をインポートする先のExpressionEngineフォーラムを指定してください。",

"forum_destination_note" =>
"注記：フォーラムが存在しない場合、フォーラムモジュールで、まずフォーラムを作成する必要があります。",

"select_forum_destination" =>
"フォーラムの目的を選択します。",

"posts_per_cycle" =>
"フォーラム投稿の数／サイクル",

"forum_cycle_instructions" =>
"フォーラムのインポートルーチンはどちらかというとプロセッサーに集中しています。 タイムアウトの問題を回避するために、限られたバッチでpMachineフォーラム投稿をインポートします。一般的なサーバでは1000が妥当な数字です。高速サーバまたは専用サーバの場合はもっと大量にインポートすることができます。",

"forum_instructions" =>
"注記：このステップを実行するのは、pMachine Proディスカッションフォーラムを実行中の場合だけです。pM Proフォーラムを実行していなければ、このステップをスキップすることができます。",

"forum_instructions2" =>
"pMachine Proはブログとフォーラムを区別しないので、フォーラムの一部として使用しているpM Proブログだけをインポートしてください。フォーラムの一部ではないブログは、ステップ3でインポートされるので、スキップしてください。",

"total_forum_posts" =>
"このフォーラムの投稿総数:",

"posts_imported" =>
"フォーラム投稿はインポートされました。",

"click_to_import_posts" =>
"%y経由でフォーラム投稿%xをインポートします。",

"step_six" =>
"ステップ6",

"member_config_complete" =>
"メンバー構成は完了しました。",

"pmachine_import_utitity" =>
"pMachine Proインポートユーティリティ",

"pmachine_import_welcome" =>
"このユーティリティで、rt pMachine FreeまたはPro データをExpressionEngineにインポートすることができます。",

"pmachine_import_disclaimer" =>
"pMachineを使用していなければこのユーティリティは不要です。",

"pmachine_import_information" =>
"インポートガイド",

"pmachine_import_removal" =>
"注記：pMachineを現在使用していなければ、このユーティリティを使わないでください。",

"configuration_blurb" =>
"このユーティリティを使うには、pMachineデータベース情報をまず提出してください。",

"configuration_blurb_cont" =>
"pMachine config.phpファイルにこの情報が載っています。",

"database_info" =>
"データベース情報",

"sql_server" =>
"MySQLサーバアドレス",

"sql_username" =>
"MySQLユーザネーム",

"sql_password" =>
"MySQLパスワード",

"sql_database" =>
"MySQLデータベース",

"sql_prefix" =>
"テーブルプレフィクス（テーブル先頭文字列）",

"leave_prefix_blank" =>
"カスタムプレフィクスを使用していなければ空欄にしておきます。",

"configure" =>
"構成",

"empty_field_warning" =>
"一部のフィールドが空の状態です。",

"no_database_connection" =>
"指定した設定とのデータベース接続を確立できません。",

"table_name" =>
"テーブルネーム",

"table_rows" =>
"テーブル行",

"table_action" =>
"アクション",

"table_status" =>
"ステータス",

"completed" =>
"完了",

"no_rows_exist" =>
"インポートは不要です。",

"pending" =>
"インポート準備中（保留）",

"pending_stats" =>
"処理準備中（保留）",

"import_now" =>
"データのインポート",

"recalculate" =>
"データの処理",

"step_one" =>
"ステップ1",

"step_two" =>
"ステップ2",

"step_three" =>
"ステップ3",

"step_four" =>
"ステップ4",

"step_five" =>
"ステップ5",

"import_options" =>
"インポートオプション",

"import_members" =>
"メンバーのインポート",

"import_weblog_entries" =>
"ブログエントリのインポート",

"recalculate_statistics" =>
"統計の再集計",

"click_to_reset_statistics" =>
"統計をアップデートするにはここをクリックします。",

"reset_statistics_info" =>
"再集計ユーティリティに転送されます。終了したらこのページに戻ってステップ5を実行します。",

"members" =>
"メンバー",

"member_stats" =>
"メンバー統計",

"weblog_stats" =>
"ブログ統計",

"configure" =>
"構成",

"total_members" =>
"pMachineデータベースのメンバー総数:",

"select_your_account" =>
"あなたのpMachineアカウントを選択します。",

"ignore_instructions" =>
"ExpressionEngineメンバーシップアカウントがすでにあるので、pMachine情報に基づきもう1つ作成するのは無意味です。もう1つ作成すると二重アカウントになります。既存のpMachineアカウントを選択すると、ブログエントリは現在のExpressionEngineアカウントに割り当てられます。",

"i_have_no_account" =>
"pMachineアカウントがありません。",

"members_per_cycle" =>
"メンバー数／サイクル",

"cycle_instructions" =>
"タイムアウトの問題を回避するために、限られたバッチでpMachineデータをインポートします。バッチ単位でインポートしたいレコード数を示してください。一般的なサーバでは1000が妥当な数字です。高速サーバまたは専用サーバの場合は、一度に数千レコードをインポートすることができます。",

"blog_cycle_instructions" =>
"エントリにコメントやトラックバックが大量にある場合は特に、ブログインポートルーチンはプロセッサー集中です。タイムアウトの問題を回避するために、限られたバッチでpMachineブログエントリをインポートします。一般的なサーバは300が妥当です。高速サーバまたは専用サーバの場合、または、エントリにコメントがたくさんなければ、もっと多くインポートすることができます。",

"save_settings" =>
"設定の保存",

"member_import_complete" =>
"メンバーインポートルーチンは完了しました。",

"return_to_overview" =>
"メインのインポートページに戻ります。",

"start_member_import" =>
"開始準備が整いました。",

"members_remaining" =>
"インポートする残りのメンバー総数:",

"click_to_import_members" =>
"%y経由でメンバー%xをインポートします。 ",

"no_table_rows" =>
"行は存在しません。",

"default_member_group" =>
"メンバーグループの割り当て",

"member_group_instructions" =>
"インポートしたメンバーをメンバーグループに割り当てる必要があります。メンバーを割り当てるグループを指定してください。",

"members_imported" =>
"メンバー全員がインポートされました。",

"return_to_main_menu" =>
"メインメニュに戻ります。",

"import_weblog_entries" =>
"ブログエントリのインポート",

"weblog_name" =>
"ブログネーム:",

"total_weblog_entries" =>
"このブログのブログエントリ総数:",

"select_destination_blog" =>
"ブログの目的（地）を選択します。",

"destination_instructions" =>
" pMachineエントリのインポート先のExpressionEngineブログを指定してください。",

"destination_note" =>
"注記：ブログが存在しない場合、ADMINページでまずブログを作成する必要があります。",

"entries_per_cycle" =>
"ブログエントリ数／サイクル",

"select_destination_fields" =>
"目的地フィールドを選択します。",

"field_destination_instructions" =>
"フィールドのインポート先として各ExpressionEngineフィールドを選択してください。",

"field_destination_instructions_two" =>
"フィールドのインポートを除外するために、\"インポートしないでください\"を指定します。",

"fields_not_unique_warning" =>
"同じExpressionEngineフィールドにpMachineフィールドを1つ以上割り当てることはできません。",

"no_fields_assigned" =>
"指定したブログには、割り当てるフィールドグループがありません。ADMINページでこのブログにフィールドグループを割り当ててください。",

"no_textarea_fields" =>
"指定したブログに割り当てるフィールドグループには、textareフィールドが含まれていません。",

"pmachine_field" =>
"pMachineフィールド",

"ee_field" =>
"ExpressionEngineフィールド ",

"none" =>
"インポートしないでください。",

"blurb" =>
"ブラーブ（宣伝文）",

"body" =>
"ボディ",

"more" =>
"more（詳細）",

"custom1" =>
"カスタム1",

"custom2" =>
"カスタム2",

"custom3" =>
"カスタム3",

"you_must_select_fields" =>
"フィールド割り当てを選択していませんでした。",

"entries_remaining" =>
"残りのエントリ:",

"entries_imported" =>
"ブログエントリはインポートされました。",

"click_to_import_entries" =>
"%y経由でブログエントリ%xをインポートします。 ",

"batch_complete" =>
"バッチ完了...",

"select_upload_blog" =>
"画像のアップロード先を選択します。",

"upload_instructions" =>
"pMachineブログエントリに画像が含まれる場合、現在の位置を新規位置に再配置する必要があります。",

"upload_note" =>
"注記：このインポートユーティリティは既存の画像を移動しません。指定の宛先に画像を移動する必要があります。",

"note_regarding_categories" =>
"ブログカテゴリについて",

"category_note" =>
"pMachineブログエントリがカテゴリに割り当てられている場合、ExpressionEngineで利用可能な同一のカテゴリが必要です。インポート処理中、 このスクリプトで各pMachineカテゴリを、対応するExpressionEngineカテゴリと一致させるようにします。一致しない場合、カテゴリはそのエントリで無視されます。",

"import_mailinglist" =>
"メーリングリストのインポート",

"total_emails" =>
"Eメール総数:",

"emails_remaining" =>
"残りのEメール総数:",

"emails_per_cycle" =>
"Eメールアドレス数／サイクル",

"email_instructions" =>
"タイムアウトの問題を回避するために、限られたバッチでEメールアドレスをインポートします。このルーチンはプロセッサー集中ではないので、平均的なサーバでは5000メール（バッチ単位）が妥当です。インポートしたいバッチ単位のレコード数を示してください。",

"mailinglist" =>
"メーリングリスト",

"mailinglist_imported" =>
"メーリングリストはインポートされました。",

"click_to_import_mailinglist" =>
"%y経由でEメール%xをインポートします。",


"clear_preferences" =>
"プリファレンスのクリア",

"click_to_clear_prefs" =>
"ここをクリックするとプリファレンスがクリアされます。",

"clear_preferences_info" =>
"このインポート処理中、プリファレンスすべてをメインconfigファイルに保存しました。インポートが完了したので、このデータを消去することをおすすめします。",

"you_are_done_importing" =>
"インポート処理を完了しました!",


/* END */
''=>''
);
?>

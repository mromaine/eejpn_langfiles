<?php

$L = array(

'alphanumeric_not_allowed' =>
'英数字の区切り文字は許可されていません（a-z / 0-9）。',

'assign_fields' =>
'フィールドの割り当て',

'assign_fields_blurb' =>
'データフィールドをExpressionEngine\’s Memberフィールドと一致させます。',

'comma' =>
'カンマ',

'confirm_details' =>
'詳細確認',

'confirm_details_blurb' =>
'データをインポートする前に下記詳細を見直してください。データに間違いがあれば戻って修正してください。',

'confirm_field_assignment' =>
'フィールド割り当ての確認',

'confirm_field_assignment_blurb' =>
'フィールド割り当てを見直してください。間違いがあれば戻って修正してください。',

'convert_from_delimited' =>
'カンマ区切りのテキストをXMLに変換します。',

'convert_from_delimited_blurb' =>
'ExpressionEngine’s Member XMLファイルを別のアプリケーション\のカンマ区切りテキストファイルから作成することができます。',

'daylight_savings' =>
'夏時間',

'default_group_id' =>
'初期設定グループID',

'default_settings' =>
'初期設定オプションの提供',

'default_settings_blurb' =>
'初期設定として使いたいオプションを設定します。これらの初期設定は、値がXMLファイルで非明示的ではない場合に使用するようにしてください。これらのオプションはXMLデータを無効にしません。',

'delimited_file_loc' =>
'メンバーファイルの位置',

'delimiter' =>
'区切られた文字',

'delimiter_blurb' =>
'この文字は、タブ、カンマ、パイプシンボル（垂直バー）などでデータを分離します。',

'download' =>
'XMLファイルのダウンロード',

'dst_enabled' =>
'DST有効',

'duplicate_email' =>
'Eメールの複製: ',

'duplicate_field_assignment' =>
'複製フィールド割り当て: %x',

'duplicate_member_id' =>
'複製メンバーID: "%x"<br /> &lt;member_id&gt;タグは使用せずに、ExpressionEngineでmember_idを自動インクリメントすることをおすすめします。',

'duplicate_screen_name' =>
'screen_nameの複製: ',

'duplicate_username' =>
'ユーザネームの複製: ',

'enclosure' =>
'囲み文字',

'enclosure_blurb' =>
'この文字は、データ（があれば）を囲みます。下記の例では、囲み文字は二重引用符です。: "<br />',

'enclosure_example' =>
'"John Doe", "jdoe", "john@example.com", ...',

'enclosure_label' =>
'エンクロージャ: ',

'encrypted_passwords' =>
'パスワードはすでに暗号化されています。',

'file_loc_blurb' =>
'ファイルの位置は、サイトの\ コントロールパネルフォルダに関連付けてください。例）: ../members.txt（サイトのルートに置く場合）',

'group_id' =>
'初期設定メンバーグループ',

'import' =>
'インポート!',

'import_from_xml' =>
'XMLファイルからインポート',

'import_from_xml_blurb' =>
' ExpressionEngine\’s Member XMLフォーマットにあるXMLファイルからメンバーをインポートすることができます。',

'import_info' =>
'インポート情報',

'import_success' =>
'メンバーがインポートされました。',

'import_success_blurb' =>
'XMLメンバーデータはデータベースにインポートされました!',

'info_blurb' =>
'このユーティリティを使うには、まずエクスポートしたメンバーデータを含むファイルをサーバに置いてからファイルの位置を提出してください。',

'invalid_element' =>
'エレメントがない、または無効。－ &lt;member&gt; expected',

'invalid_path' =>
'パスが無効です!  ファイルが存在しません。: ',

'invalid_tag' =>
'XMLタグが無効です!',

'invalid_xml' =>
'XMLファイルに問題があります。ExpressionEngine\'s Member XMLファイル形式に関するマニュアルを参照してください。',

'language' =>
'初期設定言語',

'member_fields' =>
'メンバーフィールド',

'member_id_warning' =>
'警告：XMLに&lt;member_id&gt;タグがある場合、同一のメンバーIDを持つ既存のメンバーは上書きされます!  作業には十分注意してください!',

'member_import_utility' =>
'メンバーインポートユーティリティ',

'member_import_welcome' =>
'このユーティリティで、他のシステムのメンバーをExpressionEngineにインポートすることができます。',

'missing_birthday_child' =>
'&lt;birthday&gt;のチャイルドエレメントがありません。: &lt;day&gt; &lt;month&gt; &lt;year&gt; expected',

'missing_email_field' =>
'"email"にフィールドを割り当ててください。',

'missing_screen_name_field' =>
'"screen_name"にフィールドを割り当ててください。',

'missing_username_field' =>
'"username"にフィールドを割り当ててください。',

'no' =>
'いいえ',

'no_delimiter' =>
'区切り文字に"%x"オプションを提供してください。',

'no_file_submitted' =>
'メンバーデータファイルへの関連パスを提出してください。',

'no_read_access' =>
'ファイルは読み取り不能です。: ',

'none' =>
'なし',

'not_enough_fields' =>
'3つのフィールドが少なくとも必要です。: ユーザネーム、スクリーンネーム、Eメールアドレス。',

'option' =>
'オプション',

'other' =>
'その他:',

'password_field_warning' =>
'注記：フィールドの1つが"パスワード"と一致しない場合、暗号化されたランダムパスワードが割り当てられ、インポートされたユーザはログイン時に"パスワードを忘れました"リンクを使用する必要があります。',

'password_warning' =>
'パスワード警告',

'password_warning_blurb' =>
' パスワードがない場合、インポートされたメンバーは、ログイン時に"パスワードを忘れました"リンクを使用する必要があります。またExpressionEngine暗号化設定（sha1/md5）がインポートデータの暗号化タイプと一致しない場合もパスワードは機能しないので、影響を受けたメンバーはログイン時に"パスワードを忘れました"リンクを使用する必要があります。パスワードのタイプ=インポート時に、"text"は暗号化されます。',

'plaintext_passwords' =>
'パスワードはプレーンテキストです。',

'required_fields' =>
'*ユーザネーム、スクリーンネーム、Eメールアドレスが必要です。',

'tab' =>
'タブ',

'time_format' =>
'初期設定の時間書式設定',

'timezone' =>
'初期設定タイムゾーン',

'total_members_imported' =>
'インポートされた%xメンバー総数',

'value' =>
'値',

'view_in_browser' =>
'ブラウザに表示',

'view_xml' =>
'XML表示',

'within_user_record' =>
'ユーザレコード内',

'xml_file' =>
'XMLファイル',

'xml_file_loc' =>
'XMLメンバーファイル位置',

'xml_file_loc_blurb' =>
'ファイルの位置はサイト\のコントロールパネルフォルダに関連付けてください。例：../members.xml（サイトルートに置く場合）',

'xml_imported' =>
'インポートされたXMLメンバーデータ',

'yes' =>
'はい',

'your_data' =>
'あなたのデータ',

/* END */
''=>''
);
?>

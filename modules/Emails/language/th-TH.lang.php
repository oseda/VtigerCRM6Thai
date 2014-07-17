<?php
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Public License Version 1.1.2
 * ("License"); You may not use this file except in compliance with the
 * License. You may obtain a copy of the License at http://www.sugarcrm.com/SPL
 * Software distributed under the License is distributed on an  "AS IS"  basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License for
 * the specific language governing rights and limitations under the License.
 * The Original Code is:  SugarCRM Open Source
 * The Initial Developer of the Original Code is SugarCRM, Inc.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.;
 * All Rights Reserved.
 * Contributor(s): ______________________________________.
 ********************************************************************************/
/*********************************************************************************
 * $Header: /advent/projects/wesat/vtiger_crm/sugarcrm/modules/Emails/language/en_us.lang.php,v 1.17 2005/03/28 06:31:38 rank Exp $
 * Description:  Defines the English language pack for the Account module.
 ********************************************************************************/
 
$mod_strings = Array(
// Mike Crowe Mod --------------------------------------------------------added for general search
'LBL_GENERAL_INFORMATION'=>'ข้อมูลทั่วไป',

'LBL_MODULE_NAME'=>'อีเมลล์',
'LBL_MODULE_TITLE'=>'หน้าหลัก:อีเมลล์ ',
'LBL_SEARCH_FORM_TITLE'=>'ค้นหาอีเมลล์',
'LBL_LIST_FORM_TITLE'=>'รายชื่ออีเมลล์',
'LBL_NEW_FORM_TITLE'=>'ติดตามความเคลื่อนไหวทางอีเมล์์',

'LBL_LIST_SUBJECT'=>'หัวข้อเรื่อง',
'LBL_LIST_CONTACT'=>'ผู้ติดต่อ',
'LBL_LIST_RELATED_TO'=>'ที่เกี่ยวข้องกับ',
'LBL_LIST_DATE'=>'วันที่ส่ง',
'LBL_LIST_TIME'=>'เวลาที่ส่ง',

'ERR_DELETE_RECORD'=>"A record number must be specified to delete the vtiger_account.",
'LBL_DATE_SENT'=>'วันที่ส่ง:',
'LBL_DATE_AND_TIME'=>'วัน & เวลาที่ส่ง:',
'LBL_DATE'=>'วันที่ส่ง:',
'LBL_TIME'=>'เวลาที่ส่ง:',
'LBL_SUBJECT'=>'หัวข้อเรื่อง:',
'LBL_BODY'=>'Body:',
'LBL_CONTACT_NAME'=>' ชื่อผู้ติดต่อ: ',
'LBL_EMAIL'=>'อีเมลล์:', 
'LBL_DETAILVIEW_EMAIL'=>'อีเมลล์', 
'LBL_COLON'=>':',
'LBL_CHK_MAIL'=>'ตรวจสอบจดหมาย',
'LBL_COMPOSE'=>'เรียบเรียง',
//Single change for 5.0.3
'LBL_SETTINGS'=>'การตั้งค่าเซิร์ฟเวอร์อีเมลขาเข้า',
'LBL_EMAIL_FOLDERS'=>'โฟลเดอร์อีเมลล์ ',
'LBL_INBOX'=>'กล่องขาเข้า',
'LBL_SENT_MAILS'=>'ส่งอีเมล',
'LBL_TRASH'=>'ถังขยะ',
'LBL_JUNK_MAILS'=>'อีเมลขยะ',
'LBL_TO_LEADS'=>'ถึงลูกค้าคาดหวัง',
'LBL_TO_CONTACTS'=>'ถึงผู้ติดต่อ',
'LBL_TO_ACCOUNTS'=>'ถึงบัญชีผู้ใช้',
'LBL_MY_MAILS'=>'อีเมลของฉัน',
'LBL_QUAL_CONTACT'=>'อีเมลที่ผ่านการรับรอง (ในฐานะที่เป็นผู้ติดต่อ)',
'LBL_MAILS'=>'อีเมล',
'LBL_QUALIFY_BUTTON'=>'มีคุณสมบัติ',
'LBL_REPLY_BUTTON'=>'ตอบ',
'LBL_FORWARD_BUTTON'=>'ส่งต่อ',
'LBL_DOWNLOAD_ATTCH_BUTTON'=>'ดาวน์โหลดไฟล์แนบ',
'LBL_FROM'=>'จาก :',
'LBL_CC'=>'Cc :',
'LBL_BCC'=>'Bcc :',

'NTC_REMOVE_INVITEE'=>'คุณแน่ใจหรือว่าต้องการลบผู้รับคนนี้จากอีเมล?',
'LBL_INVITEE'=>'ผู้รับ',

// Added Fields
// Contacts-SubPanelViewContactsAndUsers.php
'LBL_BULK_MAILS'=>'อีเมลขยะ',
'LBL_ATTACHMENT'=>'แนบไฟล์',
'LBL_UPLOAD'=>'อัพโหลด',
'LBL_FILE_NAME'=>'ชื่อไฟล์',
'LBL_SEND'=>'ส่ง',

'LBL_EMAIL_TEMPLATES'=>'อีเมลล์ แม่แบบ',
'LBL_TEMPLATE_NAME'=>'ชื่อแม่แบบ',
'LBL_DESCRIPTION'=>'ลักษณะ',
'LBL_EMAIL_TEMPLATES_LIST'=>'อีเมลล์รายชื่อแม่แบบ',
'LBL_EMAIL_INFORMATION'=>'ข้อมูลอีเมลล์',




//for v4 release added
'LBL_NEW_LEAD'=>'สร้าง ลูกค้าคาดวัง',
'LBL_LEAD_TITLE'=>'ลูกค้าคาดหวัง',

'LBL_NEW_PRODUCT'=>'สร้าง สินค้า',
'LBL_PRODUCT_TITLE'=>'สินค้า',
'LBL_NEW_CONTACT'=>'สร้าง ผู้ติดต่อ',
'LBL_CONTACT_TITLE'=>'ผู้ติดต่อ',
'LBL_NEW_ACCOUNT'=>'สร้าง บัญชีใหม่',
'LBL_ACCOUNT_TITLE'=>'บัญชีผู้ใช้',

// Added vtiger_fields after vtiger4 - Beta
'LBL_USER_TITLE'=>'ผู้ใช้',
'LBL_NEW_USER'=>'สร้าง ผู้ใช้',

// Added for 4 GA
'LBL_TOOL_FORM_TITLE'=>'เครื่องมือ อีเมลล์ ',
//Added for 4GA
'Date & Time Sent'=>'วัน & เวลาที่ส่ง',
'Sales Enity Module'=>'โมดูลหน่วยขาย',
'Related To'=>'ที่เกี่ยวข้องกับ',
'Assigned To'=>'มอบหมายให้',
'Subject'=>'หัวข้อเรื่อง',
'Attachment'=>'แนบไฟล์',
'Description'=>'ลักษณะ',
'Time Start'=>'เวลาเริ่มต้น',
'Created Time'=>'เวลาที่สร้างไว้',
'Modified Time'=>'เวลาแก้ไข',

'MESSAGE_CHECK_MAIL_SERVER_NAME'=>'กรุณาตรวจสอบชื่อเซิร์ฟเวอร์จดหมาย ...',
'MESSAGE_CHECK_MAIL_ID'=>'กรุณาตรวจสอบ ID Email "มอบหมายให้" ของผู้ใช้ ...',
'MESSAGE_MAIL_HAS_SENT_TO_USERS'=>'จดหมายที่ได้รับการส่งไปยังผู้ใช้งานดังต่อไปนี้  :',
'MESSAGE_MAIL_HAS_SENT_TO_CONTACTS'=>'จดหมายที่ได้รับการส่งไปยังที่ติดต่อดังต่อไปนี้ :',
'MESSAGE_MAIL_ID_IS_INCORRECT'=>'Mail Id ไม่ถูกต้อง กรุณาตรวจสอบ Mail Id...',
'MESSAGE_ADD_USER_OR_CONTACT'=>'กรุณาเพิ่มผู้ใช้หรือผู้ติดต่อ...',
'MESSAGE_MAIL_SENT_SUCCESSFULLY'=>' จดหมายส่งเรียบร้อยแล้ว!',

// Added for web mail post 4.0.1 release
'LBL_FETCH_WEBMAIL'=>'เรียกจดหมายในเว็บ',
//Added for 4.2 Release -- CustomView
'LBL_ALL'=>'ทั้งหมด',
'MESSAGE_CONTACT_NOT_WANT_MAIL'=>'ผู้ติดต่อนี้ไม่ต้องการที่จะรับอีเมล',
'LBL_WEBMAILS_TITLE'=>'WebMails',
'LBL_EMAILS_TITLE'=>'อีเมลล์',
'LBL_MAIL_CONNECT_ERROR_INFO'=>'ข้อผิดพลาดการเชื่อมต่อกับเซิร์ฟเวอร์อีเมล!<br> ตรวจสอบ My Accounts->List Mail Server -> List Mail Account',
'LBL_ALLMAILS'=>'อีเมลทั้งหมด',
'LBL_TO_USERS'=>'ถึง ผู้ใช้',
'LBL_TO'=>'ถึง:',
'LBL_IN_SUBJECT'=>'ในหัวข้อเรื่อง',
'LBL_IN_SENDER'=>'ผู้ส่ง',
'LBL_IN_SUBJECT_OR_SENDER'=>'ในหัวข้อหรือผู้ส่ง',
'SELECT_EMAIL'=>'เลือก ID-Email',
'Sender'=>'ผู้ส่ง',
'LBL_CONFIGURE_MAIL_SETTINGS'=>'Mail Server ที่ขาเข้าของคุณไม่ได้กำหนดค่า',
'LBL_MAILSELECT_INFO1'=>'ประเภท ID อีเมล์ต่อไปนี้จะเกี่ยวข้องกับที่เลือก',
'LBL_MAILSELECT_INFO2'=>'เลือกประเภท ID อีเมล์ไปที่อีเมล์จะถูกส่งไป',
'LBL_MULTIPLE'=>'หลายอย่าง',
'LBL_COMPOSE_EMAIL'=>'เขียนอีเมล',
'LBL_VTIGER_EMAIL_CLIENT'=>'vtiger Webmail Client',

//Added for 5.0.3
'TITLE_VTIGERCRM_MAIL'=>'vtigerCRM Mail',
'TITLE_COMPOSE_MAIL'=>'เขียนจดหมาย',

'MESSAGE_MAIL_COULD_NOT_BE_SEND'=>'จดหมายไม่สามารถส่งไปยังผู้ใช้ที่ได้รับมอบหมาย',
'MESSAGE_PLEASE_CHECK_ASSIGNED_USER_EMAILID'=>'กรุณาตรวจสอบที่กำหนด IDอีเมลของผู้ใช้...',
'MESSAGE_PLEASE_CHECK_THE_FROM_MAILID'=>'กรุณาตรวจสอบ ID อีเมลจาก',
'MESSAGE_MAIL_COULD_NOT_BE_SEND_TO_THIS_EMAILID'=>'จดหมายไม่สามารถส่งไปยังIDอีเมลนี้',
'PLEASE_CHECK_THIS_EMAILID'=>'กรุณาตรวจสอบid mail...',
'LBL_CC_EMAIL_ERROR'=>' id mailของคุณ CC ไม่เหมาะสม',
'LBL_BCC_EMAIL_ERROR'=>'id mailของคุณ BCC ไม่เหมาะสม',
'LBL_NO_RCPTS_EMAIL_ERROR'=>'ไม่มีการระบุผู้รับ',
'LBL_CONF_MAILSERVER_ERROR'=>'กรุณากำหนดค่า mailserver ขาออกของคุณ ---> การเชื่อมโยงเซิร์ฟเวอร์ขาออก',
'LBL_VTIGER_EMAIL_CLIENT'=>'vtiger Webmail Client',
'LBL_MAILSELECT_INFO3'=>'คุณไม่ได้รับอนุญาตให้ดูรหัสอีเมล์ของรายการที่เลือก.',
//Added  for script alerts
'FEATURE_AVAILABLE_INFO' => 'ในปัจจุบันคุณลักษณะนี้ใช้ได้เฉพาะกับ Microsoft Internet Explorer 5.5+\n\nรอการปรับปรุง!',
'DOWNLOAD_CONFIRAMATION' => 'คุณต้องการที่จะดาวน์โหลดไฟล์?',
'LBL_PLEASE_ATTACH' => 'กรุณาให้ไฟล์ที่ถูกต้องที่จะแนบและลองอีกครั้ง!',
'LBL_KINDLY_UPLOAD' => 'กรุณากำหนดค่า <font color="red">upload_tmp_dir</font> variable in php.ini file.',
'LBL_EXCEED_MAX' => 'ขออภัยไฟล์ที่อัปโหลดไฟล์ที่มีขนาดเกินขีด จำกัด สูงสุด โปรดลองไฟล์มีขนาดเล็กกว่า ',
'LBL_BYTES' => ' ไบต์',
'LBL_CHECK_USER_MAILID' => 'กรุณาตรวจสอบIDผู้ใช้งานในปัจจุบันมันควรจะเป็นIDของอีเมล์ที่ถูกต้องในการส่งอีเมล',

// Added/Updated for vtiger CRM 5.0.4
'Activity Type'=>'ประเภทกิจกรรม',
'LBL_MAILSELECT_INFO'=>'มีIDอีเมล์ต่อไปนี้ที่เกี่ยวข้อง กรุณาเลือกIDอีเมล์ที่จดหมายควรจะส่ง',
'LBL_NO_RECORDS' => 'ไม่พบรายการ',
'LBL_PRINT_EMAIL'=> 'พิมพ์',

);

?>

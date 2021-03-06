<?php
/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) 2000-2012 LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

require_once CLASS_EX_REALDIR . 'page_extends/admin/LC_Page_Admin_Ex.php';

/**
 * メルマガプレビュー のページクラス.
 *
 * @package Page
 * @author LOCKON CO.,LTD.
 * @version $Id: LC_Page_Admin_Mail_Preview.php 22503 2013-02-05 09:21:13Z m_uehara $
 */
class LC_Page_Admin_Mail_Preview extends LC_Page_Admin_Ex {

    // }}}
    // {{{ functions

    /**
     * Page を初期化する.
     *
     * @return void
     */
    function init() {
        parent::init();
        $this->tpl_subtitle = t('c_Preview_01');
        $this->tpl_mainpage = 'mail/preview.tpl';
    }

    /**
     * Page のプロセス.
     *
     * @return void
     */
    function process() {
        $this->action();
        $this->sendResponse();
    }

    /**
     * Page のアクション.
     *
     * @return void
     */
    function action() {

        $objMailHelper = new SC_Helper_Mail_Ex();

        switch ($this->getMode()) {
            case 'template':
                if (SC_Utils_Ex::sfIsInt($_GET['template_id'])) {
                    $arrMail = $objMailHelper->sfGetMailmagaTemplate($_GET['template_id']);
                    $this->mail = $arrMail[0];
                }
                break;
            case 'history';
                if (SC_Utils_Ex::sfIsInt($_GET['send_id'])) {
                    $arrMail = $objMailHelper->sfGetSendHistory($_GET['send_id']);
                    $this->mail = $arrMail[0];
                }
                break;
            case 'presend';
                $this->mail['body'] = $_POST['body'];
            default:
                break;
        }

        $this->setTemplate($this->tpl_mainpage);

    }

    /**
     * デストラクタ.
     *
     * @return void
     */
    function destroy() {
        parent::destroy();
    }
}

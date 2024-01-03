<template>
    <div>
        <div class="aspNetHidden">
            <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
                   value="eQga0hvYhFZSGsFR5ErfCZpYk3gOSI5cbVwM3OKFRFBwbgzSfaDy6l5//sJrUdGRNRnXVygXWTLs1dN3i1dtsjKuX8DdmEFoDih+xGs6aXo=">
        </div>
        <div class="aspNetHidden">
            <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="88CA0AEF">
        </div>
        <div class="Js">
            <div class="Js_today">
                <div class="Js_BG_T Js_today_T">
                    <div id="divDayWinInfo" style="">
                        Hôm nay：
                        <span id="spnDayWin" class="t_yollow" style="float: right; font-size: 18px;">0</span>
                    </div>
                    <div id="divBetListT" style="display: none; text-align: center;">
                        Danh sách đơn cược
                    </div>
                </div>
                <div>
                    <div id="divBetListSelTitle" class="Js_row_T">2D&nbsp;Nhập số - Bao lô</div>
                </div>
                <div class="scroll-wrapper Js_now scrollbar-macosx" style="position: relative;">
                    <div id="divBetListContent" class="Js_now scrollbar-macosx scroll-content"
                         style="height: auto; margin-right: 0px; max-height: 297px;">
                        <div class="Js_row_subT">Chọn số</div>
                    </div>
                    <div class="scroll-element scroll-x">
                        <div class="scroll-element_outer">
                            <div class="scroll-element_size"></div>
                            <div class="scroll-element_track"></div>
                            <div class="scroll-bar" style="width: 96px;"></div>
                        </div>
                    </div>
                    <div class="scroll-element scroll-y">
                        <div class="scroll-element_outer">
                            <div class="scroll-element_size"></div>
                            <div class="scroll-element_track"></div>
                            <div class="scroll-bar" style="height: 96px;"></div>
                        </div>
                    </div>
                </div>
                <div id="divRepeatBet" style="display: block;">
                    <input type="button" value="Lặp lại đơn cược kỳ trước" class="Js_repeat" onclick="RepeatBet()"
                           style="font-size: 13px;">
                </div>
                <div class="Js_betContent">
                    <div class="Js_betItem">Đơn cược：　<span id="spnBump" class="t_blue">0</span></div>
                    <div class="Js_betItem" style="position:relative;">
                        <label>Tiền cược：<input id="txbAmt" type="text" placeholder="0 - 0" class="Js_money"></label>
                        <a id="aClearAmt" class="btn_close" style="display: none; right: 31px;"></a>
                        <span id="spBetWagersBumps" style="color:#fe0000; font-size: 14px;">X27</span>
                    </div>
                    <div class="Js_chipArea">
                        <div class="chipWraps">
                            <span class="chip_close"></span>
                            <div id="divAllChip" class="allChipBox">
                                <div class="chipBoxItem">
                                    <div id="divChip_0" data-value="1" class="chip_Text icon_chip_1"><span>1</span></div>
                                    <div id="divChip_1" data-value="10" class="chip_Text icon_chip_10"><span>10</span></div>
                                    <div id="divChip_2" data-value="100" class="chip_Text icon_chip_100"><span>100</span>
                                    </div>
                                </div>
                                <div class="chipBoxItem">
                                    <div id="divChip_3" data-value="500" class="chip_Text icon_chip_500"><span>500</span>
                                    </div>
                                    <div id="divChip_4" data-value="1000" class="chip_Text icon_chip_1000"><span>1K</span>
                                    </div>
                                    <div id="divChipsSetting" class="chip_Custom chipSizeChg vn"><span id="spnChipsText">Chọn</span>
                                    </div>
                                </div>
                            </div>
                            <div id="divBetChip" class="betlistChip">
                                <div class="chip_Text icon_chip_1"><span>1</span></div>
                                <div class="chip_Text icon_chip_10"><span>10</span></div>
                                <div class="chip_Text icon_chip_100"><span>100</span></div>
                            </div>
                        </div>
                    </div>
                    <div id="divBetListPeriod" class="Js_betItem" style="">
                        Kỳ liên tiếp：<a class="Js_periodText" onclick="$('#divExplanation_Period').show();"><img
                        src="https://kuvn-cf.nsb777.net/images/graph/anyTime/icon_ay2Hint.png"></a>
                        <div class="Js_periodNumber">
                            <a class="Js_chipArrowL" onclick="CheckPeriodInput(-1)"></a>
                            <input id="txbPeriod" onkeyup="CheckPeriodInput(0)" type="text" value="1" maxlength="3">
                            <a class="Js_chipArrowR" onclick="CheckPeriodInput(1)"></a>
                        </div>
                    </div>
                    <div class="Js_betItem">T.tiền cược：　<span id="spnAmtTotal" class="t_black">0</span></div>
                </div>
                <div class="Js_settlement">
                    <div class="Js_betItem"><span style="float:left;">Tỉ lệ</span>：　<span></span><span id="spnBetListOdds"
                                                                                                       class="t_red">0</span>
                    </div>
                    <div class="Js_betItem" style="width: 180px;">Tiền thắng：　<span id="spnCanWin" class="t_blue">0</span>
                    </div>
                    <input id="btnCancel" type="button" value="Hủy" class="Js_cancel" onclick="ClearWagers(true)"
                           style="width: 60px;">
                    <input id="btnConfirm" type="button" value="Xác nhận gửi đi" class="Js_confirm btn_betConfirmNone"
                           onclick="BetWagers()" style="width: 110px;">
                </div>
            </div>


            <div id="divResult" style="display: inline-block; float: left;">
                <div class="presultBox presult_03" style="display: block">
                    <div id="divLotto27" class="Pk_period" style="">
                        <table width="100%">
                            <tbody>
                            <tr>
                                <td>Đặc Biệt</td>
                                <td>
                                    <div id="divNum27_26" class="drawResults"><span>537</span><span class="t_bule01"><span
                                        class="spLastTwoDigit">66</span></span></div>
                                </td>
                            </tr>
                            <tr>
                                <td>Nhất</td>
                                <td>
                                    <div id="divNum27_25" class="drawResults"><span>306</span><span class="t_bule01"><span
                                        class="spLastTwoDigit">61</span></span></div>
                                </td>
                            </tr>
                            <tr>
                                <td>Nhì</td>
                                <td>
                                    <div id="divNum27_23" class="drawResults"><span>750</span><span class="t_bule01"><span
                                        class="spLastTwoDigit">14</span></span></div>
                                    <div class="gap">-</div>
                                    <div id="divNum27_24" class="drawResults"><span>869</span><span class="t_bule01"><span
                                        class="spLastTwoDigit">41</span></span></div>
                                </td>
                            </tr>
                            <tr height="56px;">
                                <td>Ba</td>
                                <td>
                                    <div id="divNum27_17" class="drawResults"><span>657</span><span class="t_bule01"><span
                                        class="spLastTwoDigit">40</span></span></div>
                                    <div class="gap">-</div>
                                    <div id="divNum27_18" class="drawResults"><span>230</span><span class="t_bule01"><span
                                        class="spLastTwoDigit">89</span></span></div>
                                    <div class="gap">-</div>
                                    <div id="divNum27_19" class="drawResults"><span>234</span><span class="t_bule01"><span
                                        class="spLastTwoDigit">34</span></span></div>
                                    <div class="gap">-</div>
                                    <div id="divNum27_20" class="drawResults"><span>876</span><span class="t_bule01"><span
                                        class="spLastTwoDigit">37</span></span></div>
                                    <br>
                                    <div id="divNum27_21" class="drawResults"><span>040</span><span class="t_bule01"><span
                                        class="spLastTwoDigit">98</span></span></div>
                                    <div class="gap">-</div>
                                    <div id="divNum27_22" class="drawResults"><span>374</span><span class="t_bule01"><span
                                        class="spLastTwoDigit">57</span></span></div>
                                </td>
                            </tr>
                            <tr>
                                <td>Bốn</td>
                                <td>
                                    <div id="divNum27_13" class="drawResults"><span>86</span><span class="t_bule01"><span
                                        class="spLastTwoDigit">86</span></span></div>
                                    <div class="gap">-</div>
                                    <div id="divNum27_14" class="drawResults"><span>51</span><span class="t_bule01"><span
                                        class="spLastTwoDigit">46</span></span></div>
                                    <div class="gap">-</div>
                                    <div id="divNum27_15" class="drawResults"><span>39</span><span class="t_bule01"><span
                                        class="spLastTwoDigit">89</span></span></div>
                                    <div class="gap">-</div>
                                    <div id="divNum27_16" class="drawResults"><span>09</span><span class="t_bule01"><span
                                        class="spLastTwoDigit">22</span></span></div>
                                </td>
                            </tr>
                            <tr height="56px;">
                                <td>Năm</td>
                                <td>
                                    <div id="divNum27_7" class="drawResults"><span>44</span><span class="t_bule01"><span
                                        class="spLastTwoDigit">58</span></span></div>
                                    <div class="gap">-</div>
                                    <div id="divNum27_8" class="drawResults"><span>00</span><span class="t_bule01"><span
                                        class="spLastTwoDigit">52</span></span></div>
                                    <div class="gap">-</div>
                                    <div id="divNum27_9" class="drawResults"><span>33</span><span class="t_bule01"><span
                                        class="spLastTwoDigit">23</span></span></div>
                                    <div class="gap">-</div>
                                    <div id="divNum27_10" class="drawResults"><span>17</span><span class="t_bule01"><span
                                        class="spLastTwoDigit">26</span></span></div>
                                    <br>
                                    <div id="divNum27_11" class="drawResults"><span>94</span><span class="t_bule01"><span
                                        class="spLastTwoDigit">11</span></span></div>
                                    <div class="gap">-</div>
                                    <div id="divNum27_12" class="drawResults"><span>65</span><span class="t_bule01"><span
                                        class="spLastTwoDigit">61</span></span></div>
                                </td>
                            </tr>
                            <tr>
                                <td>Sáu</td>
                                <td>
                                    <div id="divNum27_4" class="drawResults"><span>6</span><span class="t_bule01"><span
                                        class="spLastTwoDigit">05</span></span></div>
                                    <div class="gap">-</div>
                                    <div id="divNum27_5" class="drawResults"><span>5</span><span class="t_bule01"><span
                                        class="spLastTwoDigit">54</span></span></div>
                                    <div class="gap">-</div>
                                    <div id="divNum27_6" class="drawResults"><span>5</span><span class="t_bule01"><span
                                        class="spLastTwoDigit">78</span></span></div>
                                </td>
                            </tr>
                            <tr>
                                <td>Bảy</td>
                                <td>
                                    <div id="divNum27_0" class="drawResults"><span></span><span class="t_bule01"><span
                                        class="spLastTwoDigit">12</span></span></div>
                                    <div class="gap">-</div>
                                    <div id="divNum27_1" class="drawResults"><span></span><span class="t_bule01"><span
                                        class="spLastTwoDigit">89</span></span></div>
                                    <div class="gap">-</div>
                                    <div id="divNum27_2" class="drawResults"><span></span><span class="t_bule01"><span
                                        class="spLastTwoDigit">65</span></span></div>
                                    <div class="gap">-</div>
                                    <div id="divNum27_3" class="drawResults"><span></span><span class="t_bule01"><span
                                        class="spLastTwoDigit">97</span></span></div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="Pk_Presult">
                        <table width="100%">
                            <tbody>
                            <tr>
                                <td width="40">0</td>
                                <td id="tdNum_0">5</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td id="tdNum_1">4,1,2</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td id="tdNum_2">2,3,6</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td id="tdNum_3">4,7</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td id="tdNum_4">1,0,6</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td id="tdNum_5">7,8,2,4</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td id="tdNum_6">6,1,1,5</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td id="tdNum_7">8</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td id="tdNum_8">9,6,9,9</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td id="tdNum_9">8,7</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="PeriodBox">
                    <table width="100%">
                        <tbody id="tbPeriod">
                        <tr class="Now2">
                            <td>2311010328</td>
                        </tr>
                        <tr>
                            <td>2311010327</td>
                        </tr>
                        <tr>
                            <td>2311010326</td>
                        </tr>
                        <tr>
                            <td>2311010325</td>
                        </tr>
                        <tr>
                            <td>2311010324</td>
                        </tr>
                        <tr>
                            <td>2311010323</td>
                        </tr>
                        <tr>
                            <td>2311010322</td>
                        </tr>
                        <tr>
                            <td>2311010321</td>
                        </tr>
                        <tr>
                            <td>2311010320</td>
                        </tr>
                        <tr>
                            <td>2311010319</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="Js_play">

                <div class="Js_BG_T Js_play_T">
                    Kỳ hiện tại <span id="spnFirst">：</span> <span id="tdGid" class="t_yollow white_space">2311010329</span>&nbsp;
                    <span class="Js_reciprocal">Đ.ngược：
                        <span id="spnMM" class="time red_t">00</span>
                        <span class="white_t"> : </span>
                        <span id="spnSS" class="time red_t">08</span>
                    </span>
                    <span class="Js_remaining">Hôm nay đã mở <span id="spnTodayOpen" class="t_yollow">328</span>&nbsp;kỳ, còn lại <span
                        id="spnTodayOver" class="t_yollow">1112</span>&nbsp;kỳ</span>
                </div>

                <div class="Js_bookmark">
                    <a id="btnStar_2" class="Js_registration on">
                        <span class="blueLine"></span>
                        2D
                    </a>
                    <a id="btnStar_3" class="Js_registration">
                        <span class="blueLine"></span>
                        3D
                    </a>
                    <a id="btnStar_4" class="Js_registration">
                        <span class="blueLine"></span>
                        4D
                    </a>

                    <a id="btnStar_5" class="Js_registration">
                        <span class="blueLine"></span>
                        ĐB K.cố định
                    </a>
                    <span class="Js_note" style="display: block;">※1 kỳ đặt cược tối đa 55 con số</span>
                </div>

                <div class="Js_playContent">


                    <div id="divMidSelect_Single2" class="Js_submenu" style="display: block;">
                    <span id="spnSingle2" class="Js_submenu_title" style="line-height: 15px;">2D&nbsp;<span
                        style="letter-spacing:-0.9px">Nhập số</span>：</span>
                        <a id="btnFB_Single_2421" class="btn_Js_submenu" style="font-size: 13px;">Đầu</a>
                        <a id="btnFB_Single_2422" class="btn_Js_submenu" style="font-size: 13px;">Đề đuôi</a>
                        <a id="btnFB_Single_2423" class="btn_Js_submenu" style="font-size: 13px;">Đầu Đuôi</a>
                        <a id="btnFB_Single_2426" class="btn_Js_submenu" style="font-size: 13px;">Giải nhất</a>
                        <a id="btnFB_Single_2425" class="btn_Js_submenu on" style="font-size: 13px;">Bao lô</a>

                        <a id="btnFB_Single_2427" class="btn_Js_submenu" style="font-size: 13px;">Đề đầu</a>
                    </div>
                    <div id="divMidSelect_BSOE2" class="Js_submenu" style="display: block;">
                        <span id="spnBSOE2" class="Js_submenu_title" style="letter-spacing: 0.3px; line-height: 15px;">Đặc biệt：</span>


                        <a id="btnBB_Normal_General2" class="btn_Js_submenu" style="font-size: 13px;">Digit 2D</a>
                        <a id="btnBB_Normal_FastParley" class="btn_Js_submenu" style="font-size: 13px;">Xiên Nhanh</a>
                        <a id="btnBB_Normal_SingleParley" class="btn_Js_submenu"
                           style="font-size: 13px; letter-spacing: -1px;">Lô Xiên nhập số</a>
                        <a id="btnBB_Multiple_Choices" class="btn_Js_submenu" style="font-size: 13px;">Lô trượt</a>
                        <a id="btnBB_Multiple_SingleChoices" class="btn_Js_submenu"
                           style="font-size: 13px; letter-spacing: -1px;">Lô trượt nhập số</a>
                    </div>
                    <div id="divMidSelect_Duplex2" class="Js_submenu">
                    <span id="spnDuplex2" class="Js_submenu_title"
                          style="line-height: 15px;">2D&nbsp;<span>Ghép số</span>：</span>
                        <a id="btnFB_Duplex_2421" class="btn_Js_submenu" style="font-size: 13px;">Đầu</a>
                        <a id="btnFB_Duplex_2422" class="btn_Js_submenu" style="font-size: 13px;">Đề đuôi</a>
                        <a id="btnFB_Duplex_2423" class="btn_Js_submenu" style="font-size: 13px;">Đầu Đuôi</a>
                        <a id="btnFB_Duplex_2426" class="btn_Js_submenu" style="font-size: 13px;">Giải nhất</a>
                        <a id="btnFB_Duplex_2425" class="btn_Js_submenu" style="font-size: 13px;">Bao lô</a>

                        <a id="btnFB_Duplex_2427" class="btn_Js_submenu" style="font-size: 13px;">Đề đầu</a>
                    </div>

                    <div id="divMidSelect_StarBack2" class="Js_submenu" style="display: block;">
                        <span id="spnStarBack2" class="Js_submenu_title" style="line-height: 15px; letter-spacing: -0.6px;">Nhóm hậu nhị：</span>

                        <a id="btnFB_CombineSingle_2491" class="btn_Js_submenu" style="font-size: 12px;">Nhóm Nhập số</a>
                        <a id="btnBB_Normal_FastCombine_2491" class="btn_Js_submenu" style="font-size: 13px;">Digit</a><a
                        id="btnFB_CombineRow_2491" class="btn_Js_submenu" style="font-size: 12px;">Nhóm Ghép số</a>
                    </div>
                </div>
                <div id="divLayout_Single" style="">
                    <div class="Js_description">
                        <div style="float: left;">Hướng dẫn：</div>
                        <span id="spnPlay_Single">Dùng tay nhập 2 chữ số cuối trong 27 lô, nếu số về N lần tính kết quả x lần</span>
                        <div class="Js_otherHelp">
                                <span id="divExample_StraightSingle" class="t_black" style="margin-left: 0px;">
                                    <img
                                        src="https://kuvn-cf.nsb777.net/images/graph/anyTime/icon_cnATHint.png">Ví dụ</span>
                            <span id="divHelp_StraightSingle" class="t_black"
                                  style="padding-right: 2px; letter-spacing: -1px; margin-left: 0px;">
                                    <img src="https://kuvn-cf.nsb777.net/images/graph/anyTime/icon_ay2Hint.png">Trợ giúp</span>
                        </div>
                    </div>
                    <div class="Js_substance" style="height: 190px;">
                        <div id="divTextarea" class="InputBox">
                            <div class="scroll-wrapper inputArea scrollbar-macosx scroll-textarea"
                                 style="position: relative;">
                                <div class="scroll-content"
                                     style="margin-right: 0px; height: 148.667px; max-height: none;"><textarea
                                    id="txbArea_Single" class="inputArea scrollbar-macosx"
                                    placeholder="Nhập số đặt cược"></textarea></div>
                                <div class="scroll-element scroll-x">
                                    <div class="scroll-element_outer">
                                        <div class="scroll-element_size"></div>
                                        <div class="scroll-element_track"></div>
                                        <div class="scroll-bar" style="width: 95px;"></div>
                                    </div>
                                </div>
                                <div class="scroll-element scroll-y">
                                    <div class="scroll-element_outer">
                                        <div class="scroll-element_size"></div>
                                        <div class="scroll-element_track"></div>
                                        <div class="scroll-bar" style="height: 95px;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn_Box">
                                <a class="Js_clear" onclick="ClearSingleKeyIn()">Xóa</a>
                                <a id="btnAddList_Single" class="Js_addmenu">Thêm vào D.sách</a>
                                <p>Đã nhập <span id="spnSgHint" class="t_blue">0</span> đơn</p>
                            </div>
                        </div>
                        <div class="Input_notice">
                            <div class="keyInput" style="margin-top: -2px;">
                                <span>Nhập số：</span>
                                <input type="text" id="txbInput" maxlength="2">
                                <a id="aClearNum" class="btn_clear" style="right: 618px; display: none;"></a>
                                <div id="btnCombine" class="keyInput_Btn" style="width: 58px;">Lật bài</div>
                            </div>
                            <a onclick="$('#divExplanation_KeyIn').show();" class="btn_notice">Hướng dẫn nhập số</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div id="divDialogOdds" class="div_limit" style="color: #C1272D; padding: 2px"></div>
        <div id="divDialogNum" class="div_limit" style="padding: 2px; z-index: 102; color: rgb(193, 39, 45);"></div>
        <div id="divDialogExample" class="div_limit" style="padding: 2px;  max-width: 365px; right: 272px;">Đặt cược: 90<br>Kết
            quả 2 chữ số cuối trong 27 lô mở thưởng trùng với số<br>[90] thì xem như trúng thưởng 2D Nhập số - Bao lô
        </div>
        <div id="divDialogHelp" class="div_limit" style="padding: 2px; max-width: 370px;  right: 212px;">Nhập 2 chữ số cuối
            trong 27 lô mở thưởng, bấm<br>"Thêm vào D.Sách", nhập số tiền đặt cược và<br>bấm "Xác nhận gửi đi" để hoàn tất
            đặt cược
        </div>
        <div id="divLimitBallInfo" class="div_limitBall"></div>


        <div id="divPopUp_General" class="PopUps" style="display: none; z-index: 101;">
            <div id="divGeneralTitle" class="PopUps_title">
                <div class="btn_close" style="top:20px;" onclick="CloseFastWindow(true)"></div>
            </div>
            <div id="divHundred" class="PopUps_content">
                <div class="SelectBar">
                    <ul>
                        <li class="SelectBar_title">Trăm</li>
                        <li class="bar_line"></li>
                        <li>
                            <div class="text_opt on" style="margin-left: 14px;">0
                            </div>
                        </li>
                        <li>
                            <div class="text_opt">1
                            </div>
                        </li>
                        <li>
                            <div class="text_opt">2
                            </div>
                        </li>
                        <li>
                            <div class="text_opt">3
                            </div>
                        </li>
                        <li>
                            <div class="text_opt">4
                            </div>
                        </li>
                        <li>
                            <div class="text_opt">5
                            </div>
                        </li>
                        <li>
                            <div class="text_opt">6
                            </div>
                        </li>
                        <li>
                            <div class="text_opt">7
                            </div>
                        </li>
                        <li>
                            <div class="text_opt">8
                            </div>
                        </li>
                        <li>
                            <div class="text_opt">9
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="divGeneralLayout" class="PopUps_content">
                <table class="SelectList">
                    <tbody>
                    <tr>
                        <td><input type="checkbox" id="chkAllDigits_10"></td>
                        <td><input type="checkbox" id="chkDigits_0"></td>
                        <td><input type="checkbox" id="chkDigits_1"></td>
                        <td><input type="checkbox" id="chkDigits_2"></td>
                        <td><input type="checkbox" id="chkDigits_3"></td>
                        <td><input type="checkbox" id="chkDigits_4"></td>
                        <td><input type="checkbox" id="chkDigits_5"></td>
                        <td><input type="checkbox" id="chkDigits_6"></td>
                        <td><input type="checkbox" id="chkDigits_7"></td>
                        <td><input type="checkbox" id="chkDigits_8"></td>
                        <td><input type="checkbox" id="chkDigits_9"></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="chkTenDigits_0">
                        </td>
                        <td id="tdId_00"></td>
                        <td id="tdId_01"></td>
                        <td id="tdId_02"></td>
                        <td id="tdId_03"></td>
                        <td id="tdId_04"></td>
                        <td id="tdId_05"></td>
                        <td id="tdId_06"></td>
                        <td id="tdId_07"></td>
                        <td id="tdId_08"></td>
                        <td id="tdId_09"></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="chkTenDigits_1">
                        </td>
                        <td id="tdId_10"></td>
                        <td id="tdId_11"></td>
                        <td id="tdId_12"></td>
                        <td id="tdId_13"></td>
                        <td id="tdId_14"></td>
                        <td id="tdId_15"></td>
                        <td id="tdId_16"></td>
                        <td id="tdId_17"></td>
                        <td id="tdId_18"></td>
                        <td id="tdId_19"></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="chkTenDigits_2">
                        </td>
                        <td id="tdId_20"></td>
                        <td id="tdId_21"></td>
                        <td id="tdId_22"></td>
                        <td id="tdId_23"></td>
                        <td id="tdId_24"></td>
                        <td id="tdId_25"></td>
                        <td id="tdId_26"></td>
                        <td id="tdId_27"></td>
                        <td id="tdId_28"></td>
                        <td id="tdId_29"></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="chkTenDigits_3">
                        </td>
                        <td id="tdId_30"></td>
                        <td id="tdId_31"></td>
                        <td id="tdId_32"></td>
                        <td id="tdId_33"></td>
                        <td id="tdId_34"></td>
                        <td id="tdId_35"></td>
                        <td id="tdId_36"></td>
                        <td id="tdId_37"></td>
                        <td id="tdId_38"></td>
                        <td id="tdId_39"></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="chkTenDigits_4">
                        </td>
                        <td id="tdId_40"></td>
                        <td id="tdId_41"></td>
                        <td id="tdId_42"></td>
                        <td id="tdId_43"></td>
                        <td id="tdId_44"></td>
                        <td id="tdId_45"></td>
                        <td id="tdId_46"></td>
                        <td id="tdId_47"></td>
                        <td id="tdId_48"></td>
                        <td id="tdId_49"></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="chkTenDigits_5">
                        </td>
                        <td id="tdId_50"></td>
                        <td id="tdId_51"></td>
                        <td id="tdId_52"></td>
                        <td id="tdId_53"></td>
                        <td id="tdId_54"></td>
                        <td id="tdId_55"></td>
                        <td id="tdId_56"></td>
                        <td id="tdId_57"></td>
                        <td id="tdId_58"></td>
                        <td id="tdId_59"></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="chkTenDigits_6">
                        </td>
                        <td id="tdId_60"></td>
                        <td id="tdId_61"></td>
                        <td id="tdId_62"></td>
                        <td id="tdId_63"></td>
                        <td id="tdId_64"></td>
                        <td id="tdId_65"></td>
                        <td id="tdId_66"></td>
                        <td id="tdId_67"></td>
                        <td id="tdId_68"></td>
                        <td id="tdId_69"></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="chkTenDigits_7">
                        </td>
                        <td id="tdId_70"></td>
                        <td id="tdId_71"></td>
                        <td id="tdId_72"></td>
                        <td id="tdId_73"></td>
                        <td id="tdId_74"></td>
                        <td id="tdId_75"></td>
                        <td id="tdId_76"></td>
                        <td id="tdId_77"></td>
                        <td id="tdId_78"></td>
                        <td id="tdId_79"></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="chkTenDigits_8">
                        </td>
                        <td id="tdId_80"></td>
                        <td id="tdId_81"></td>
                        <td id="tdId_82"></td>
                        <td id="tdId_83"></td>
                        <td id="tdId_84"></td>
                        <td id="tdId_85"></td>
                        <td id="tdId_86"></td>
                        <td id="tdId_87"></td>
                        <td id="tdId_88"></td>
                        <td id="tdId_89"></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" id="chkTenDigits_9">
                        </td>
                        <td id="tdId_90"></td>
                        <td id="tdId_91"></td>
                        <td id="tdId_92"></td>
                        <td id="tdId_93"></td>
                        <td id="tdId_94"></td>
                        <td id="tdId_95"></td>
                        <td id="tdId_96"></td>
                        <td id="tdId_97"></td>
                        <td id="tdId_98"></td>
                        <td id="tdId_99"></td>
                    </tr>
                    </tbody>
                </table>
                <div class="FunctionBar">
                    <ul>
                        <li>
                            <div id="divAmtCount_1" class="Function_value">X<span id="spnGeneralAmtCount_1">4</span></div>
                            <input type="text" id="txbGeneralAmt_1" class="importBox">
                            <div class="Function_title">Đầu</div>
                        </li>
                        <li>
                            <div id="divAmtCount_2" class="Function_value">X<span id="spnGeneralAmtCount_2">1</span></div>
                            <input type="text" id="txbGeneralAmt_2" class="importBox">
                            <div class="Function_title">Đề đuôi</div>
                        </li>
                        <li>
                            <div id="divAmtCount_3" class="Function_value">X<span id="spnGeneralAmtCount_3">5</span></div>
                            <input type="text" id="txbGeneralAmt_3" class="importBox">
                            <div class="Function_title">Đầu Đuôi</div>
                        </li>
                        <li>
                            <div id="divAmtCount_6" class="Function_value">X<span id="spnGeneralAmtCount_6">1</span></div>
                            <input type="text" id="txbGeneralAmt_6" class="importBox">
                            <div class="Function_title">Giải nhất</div>
                        </li>
                        <li>
                            <div id="divAmtCount_5" class="Function_value">X<span id="spnGeneralAmtCount_5">27</span></div>
                            <input type="text" id="txbGeneralAmt_5" class="importBox">
                            <div class="Function_title">Bao lô</div>
                        </li>
                        <li></li>
                        <li>
                            <div id="divAmtCount_7" class="Function_value">X<span id="spnGeneralAmtCount_7">1</span></div>
                            <input type="text" id="txbGeneralAmt_7" class="importBox">
                            <div class="Function_title">Đề đầu</div>
                        </li>
                        <li>
                            <div id="divBetListPeriodGeneral" class="Js_betItem2">
                                Kỳ liên tiếp：<a class="Js_periodText" onclick="$('#divExplanation_Period').show();"><img
                                src="https://kuvn-cf.nsb777.net/images/graph/anyTime/icon_ay2Hint.png"></a>
                                <div class="Js_periodNumber2">
                                    <a class="Js_chipArrowL" ></a>
                                    <input id="txbPeriod_General"  type="text" value="1"
                                           maxlength="3">
                                    <a class="Js_chipArrowR" ></a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="SelectResult" style="margin: 2px 0px 8px 10px;">
                                Gồm <span id="spnBetBall" class="colorDblue">0</span> đơn<br>
                                <span>T.tiền cược：<span id="spnBetTotal" style="color: #fe0000;">0</span></span>
                            </div>
                            <div class="btn_wrap vn">
                                <input type="button" value="Hủy" class="Js_cancel">
                                <input id="btnGeneralWagers" type="button" value="Xác nhận gửi đi"
                                       class="Js_confirm btn_betConfirmNone" >
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="keyInput">
                <span>Nhập số：</span>
                <input type="text" id="txbInput_General">
                <a id="aFastClearNum" class="btn_fastclear" style="right: 525px; display: none;"></a>
                <div id="btnCombine_General" class="keyInput_Btn" style="width: 58px;">Lật bài</div>
            </div>
        </div>


        <div id="divPopUp_FastParley" class="PopUps" style="display: none; z-index: 101;">
            <div id="divFastParleyTitle" class="PopUps_title">
                Lô Xiên cược nhanh
                <div class="btn_close" style="top: 20px;" onclick="CloseFastWindow(true)"></div>
            </div>
            <div class="PopUps_content02">
                <table class="SelectList02" style="table-layout: auto;">
                    <tbody>
                    <tr>
                        <td id="tdFastId_00">00</td>
                        <td id="tdFastId_01">01</td>
                        <td id="tdFastId_02">02</td>
                        <td id="tdFastId_03">03</td>
                        <td id="tdFastId_04">04</td>
                        <td id="tdFastId_05">05</td>
                        <td id="tdFastId_06">06</td>
                        <td id="tdFastId_07">07</td>
                        <td id="tdFastId_08">08</td>
                        <td id="tdFastId_09">09</td>
                    </tr>
                    <tr>
                        <td id="tdFastId_10">10</td>
                        <td id="tdFastId_11">11</td>
                        <td id="tdFastId_12">12</td>
                        <td id="tdFastId_13">13</td>
                        <td id="tdFastId_14">14</td>
                        <td id="tdFastId_15">15</td>
                        <td id="tdFastId_16">16</td>
                        <td id="tdFastId_17">17</td>
                        <td id="tdFastId_18">18</td>
                        <td id="tdFastId_19">19</td>
                    </tr>
                    <tr>
                        <td id="tdFastId_20">20</td>
                        <td id="tdFastId_21">21</td>
                        <td id="tdFastId_22">22</td>
                        <td id="tdFastId_23">23</td>
                        <td id="tdFastId_24">24</td>
                        <td id="tdFastId_25">25</td>
                        <td id="tdFastId_26">26</td>
                        <td id="tdFastId_27">27</td>
                        <td id="tdFastId_28">28</td>
                        <td id="tdFastId_29">29</td>
                    </tr>
                    <tr>
                        <td id="tdFastId_30">30</td>
                        <td id="tdFastId_31">31</td>
                        <td id="tdFastId_32">32</td>
                        <td id="tdFastId_33">33</td>
                        <td id="tdFastId_34">34</td>
                        <td id="tdFastId_35">35</td>
                        <td id="tdFastId_36">36</td>
                        <td id="tdFastId_37">37</td>
                        <td id="tdFastId_38">38</td>
                        <td id="tdFastId_39">39</td>
                    </tr>
                    <tr>
                        <td id="tdFastId_40">40</td>
                        <td id="tdFastId_41">41</td>
                        <td id="tdFastId_42">42</td>
                        <td id="tdFastId_43">43</td>
                        <td id="tdFastId_44">44</td>
                        <td id="tdFastId_45">45</td>
                        <td id="tdFastId_46">46</td>
                        <td id="tdFastId_47">47</td>
                        <td id="tdFastId_48">48</td>
                        <td id="tdFastId_49">49</td>
                    </tr>
                    <tr>
                        <td id="tdFastId_50">50</td>
                        <td id="tdFastId_51">51</td>
                        <td id="tdFastId_52">52</td>
                        <td id="tdFastId_53">53</td>
                        <td id="tdFastId_54">54</td>
                        <td id="tdFastId_55">55</td>
                        <td id="tdFastId_56">56</td>
                        <td id="tdFastId_57">57</td>
                        <td id="tdFastId_58">58</td>
                        <td id="tdFastId_59">59</td>
                    </tr>
                    <tr>
                        <td id="tdFastId_60">60</td>
                        <td id="tdFastId_61">61</td>
                        <td id="tdFastId_62">62</td>
                        <td id="tdFastId_63">63</td>
                        <td id="tdFastId_64">64</td>
                        <td id="tdFastId_65">65</td>
                        <td id="tdFastId_66">66</td>
                        <td id="tdFastId_67">67</td>
                        <td id="tdFastId_68">68</td>
                        <td id="tdFastId_69">69</td>
                    </tr>
                    <tr>
                        <td id="tdFastId_70">70</td>
                        <td id="tdFastId_71">71</td>
                        <td id="tdFastId_72">72</td>
                        <td id="tdFastId_73">73</td>
                        <td id="tdFastId_74">74</td>
                        <td id="tdFastId_75">75</td>
                        <td id="tdFastId_76">76</td>
                        <td id="tdFastId_77">77</td>
                        <td id="tdFastId_78">78</td>
                        <td id="tdFastId_79">79</td>
                    </tr>
                    <tr>
                        <td id="tdFastId_80">80</td>
                        <td id="tdFastId_81">81</td>
                        <td id="tdFastId_82">82</td>
                        <td id="tdFastId_83">83</td>
                        <td id="tdFastId_84">84</td>
                        <td id="tdFastId_85">85</td>
                        <td id="tdFastId_86">86</td>
                        <td id="tdFastId_87">87</td>
                        <td id="tdFastId_88">88</td>
                        <td id="tdFastId_89">89</td>
                    </tr>
                    <tr>
                        <td id="tdFastId_90">90</td>
                        <td id="tdFastId_91">91</td>
                        <td id="tdFastId_92">92</td>
                        <td id="tdFastId_93">93</td>
                        <td id="tdFastId_94">94</td>
                        <td id="tdFastId_95">95</td>
                        <td id="tdFastId_96">96</td>
                        <td id="tdFastId_97">97</td>
                        <td id="tdFastId_98">98</td>
                        <td id="tdFastId_99">99</td>
                    </tr>
                    </tbody>
                </table>
                <div class="FunctionBar02_title">
                    <ul>
                        <li>
                            <span id="spanParley_2">Xiên 2</span>
                        </li>
                        <li>
                            <span id="spanParley_3">Xiên 3</span>
                        </li>
                        <li>
                            <span id="spanParley_4">Xiên 4</span>
                        </li>
                    </ul>
                </div>
                <div class="scroll-wrapper FunctionBar02 scrollbar-macosx" style="position: relative;">
                    <div id="BetListTitle" class="FunctionBar02 scrollbar-macosx scroll-content"
                         style="margin-right: 0px; height: 245px; max-height: none;">
                        <ul></ul>
                    </div>
                    <div class="scroll-element scroll-x">
                        <div class="scroll-element_outer">
                            <div class="scroll-element_size"></div>
                            <div class="scroll-element_track"></div>
                            <div class="scroll-bar"></div>
                        </div>
                    </div>
                    <div class="scroll-element scroll-y">
                        <div class="scroll-element_outer">
                            <div class="scroll-element_size"></div>
                            <div class="scroll-element_track"></div>
                            <div class="scroll-bar"></div>
                        </div>
                    </div>
                </div>
                <div class="FunctionBar02_bot">
                    <div class="SelectResult02">
                        <div class="importWrapL">
                            Tiền cược：<input type="text" id="txbFastParleyAmtSync" class="importBox02 bet">
                            <a id="aClearFastParleyAmtSync" class="btn_close" style="right: 115px; display: none;"></a>
                        </div>
                        <div class="importWrapR" style="margin-right: 1px;">
                            Gồm <span id="spnBetNum" class="colorDblue">0</span> đơn
                        </div>
                    </div>
                    <div id="divBetListPeriodFastParley" class="Js_betItem3">
                        Kỳ liên tiếp：<a class="Js_periodText" onclick="$('#divExplanation_Period').show();"><img
                        src="https://kuvn-cf.nsb777.net/images/graph/anyTime/icon_ay2Hint.png"></a>
                        <div class="Js_periodNumber">
                            <a class="Js_chipArrowL" onclick="CheckPeriodInput(-1)"></a>
                            <input id="txbPeriod_FastParley" onkeyup="CheckPeriodInput(0)" type="text" value="1"
                                   maxlength="3">
                            <a class="Js_chipArrowR" onclick="CheckPeriodInput(1)"></a>
                        </div>
                    </div>
                    <div class="btn_wrap02 vn">
                        <input type="button" value="Hủy" class="Js_cancel" onclick="ClearWagers(false)">
                        <input id="btnFastParleyWagers" type="button" value="Xác nhận gửi đi"
                               class="Js_confirm btn_betConfirmNone" onclick="BBetWagers()">
                    </div>
                </div>
            </div>
        </div>


        <div id="divPopUp_SingleParley" class="PopUps" style="display: none; z-index: 101;">
            <div id="divSigleParleyTitle" class="PopUps_title">
                Lô Xiên nhập số
                <div class="btn_close" style="top: 20px;" onclick="CloseFastWindow(true)"></div>
            </div>
            <div class="PopUps_content02">
                <div class="SelectListSingle">
                    <div class="scroll-wrapper inputArea scrollbar-macosx scroll-textarea" style="position: relative;">
                        <div class="scroll-content" style="margin-right: 0px; height: 347.333px; max-height: none;">
                        <textarea id="txbArea_SingleParley" class="inputArea scrollbar-macosx"
                                  placeholder="Nhập số đặt cược"></textarea></div>
                        <div class="scroll-element scroll-x">
                            <div class="scroll-element_outer">
                                <div class="scroll-element_size"></div>
                                <div class="scroll-element_track"></div>
                                <div class="scroll-bar"></div>
                            </div>
                        </div>
                        <div class="scroll-element scroll-y">
                            <div class="scroll-element_outer">
                                <div class="scroll-element_size"></div>
                                <div class="scroll-element_track"></div>
                                <div class="scroll-bar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="Singlebtn_Box">
                        <div class="btn_Box">
                            <a class="Js_clear" onclick="ClearSingleKeyIn()">Xóa</a>
                            <a id="btnAddList_SingleParley" class="Js_addmenu" style="width: 125px;">Thêm vào D.sách</a>
                        </div>
                        <div class="result_show" style="padding-top: 13px;">
                            <p>Đã nhập <span id="spnHintSingleParley" class="t_blue">0</span> đơn</p>
                            <a onclick="$('#divExplanation_ParleyPeriod').show();"><img
                                src="https://kuvn-cf.nsb777.net/images/graph/anyTime/icon_ay2Hint.png"
                                style="margin-top: 0px;"></a>
                        </div>
                    </div>
                </div>
                <div class="FunctionBar02_title">
                    <ul>
                        <li>
                            <span id="spanSingleParley_2">Xiên 2</span>
                        </li>
                        <li>
                            <span id="spanSingleParley_3">Xiên 3</span>
                        </li>
                        <li>
                            <span id="spanSingleParley_4">Xiên 4</span>
                        </li>
                    </ul>
                </div>
                <div class="scroll-wrapper FunctionBar02 scrollbar-macosx" style="position: relative;">
                    <div id="BetSingleParleyListTitle" class="FunctionBar02 scrollbar-macosx scroll-content"
                         style="margin-right: 0px; height: 245px; max-height: none;">
                        <ul></ul>
                    </div>
                    <div class="scroll-element scroll-x">
                        <div class="scroll-element_outer">
                            <div class="scroll-element_size"></div>
                            <div class="scroll-element_track"></div>
                            <div class="scroll-bar"></div>
                        </div>
                    </div>
                    <div class="scroll-element scroll-y">
                        <div class="scroll-element_outer">
                            <div class="scroll-element_size"></div>
                            <div class="scroll-element_track"></div>
                            <div class="scroll-bar"></div>
                        </div>
                    </div>
                </div>
                <div class="FunctionBar02_bot">
                    <div class="SelectResult02">
                        <div class="importWrapL">
                            Tiền cược：<input type="text" id="txbSingleParleyAmtSync" class="importBox02 bet">
                            <a id="aClearSingleParleyAmtSync" class="btn_close" style="right: 115px; display: none;"></a>
                        </div>
                        <div class="importWrapR" style="margin-right: 1px;">
                            Gồm <span id="spnBetNumSingleParley" class="colorDblue">0</span> đơn
                        </div>
                    </div>
                    <div id="divBetListPeriodSingleParley" class="Js_betItem3">
                        Kỳ liên tiếp：<a class="Js_periodText" onclick="$('#divExplanation_Period').show();"><img
                        src="https://kuvn-cf.nsb777.net/images/graph/anyTime/icon_ay2Hint.png"></a>
                        <div class="Js_periodNumber">
                            <a class="Js_chipArrowL" onclick="CheckPeriodInput(-1)"></a>
                            <input id="txbPeriod_SingleParley" onkeyup="CheckPeriodInput(0)" type="text" value="1"
                                   maxlength="3">
                            <a class="Js_chipArrowR" onclick="CheckPeriodInput(1)"></a>
                        </div>
                    </div>
                    <div class="btn_wrap02 vn">
                        <input type="button" value="Hủy" class="Js_cancel" onclick="ClearWagers(false)">
                        <input id="btnSingleParleyWagers" type="button" value="Xác nhận gửi đi"
                               class="Js_confirm btn_betConfirmNone" onclick="BBetWagersSingleParley()">
                    </div>
                </div>
            </div>
        </div>


        <div id="divPopUp_FastMulti" class="PopUps" style="display:none; z-index: 101; left: 46px;">
            <div id="divFastMultiTitle" class="PopUps_title">
                Lô trượt
                <div class="btn_close" style="top: 20px;" onclick="CloseFastWindow(true)"></div>
            </div>
            <div class="FunctionBar02_title Multiple_Choices">
                <ul>
                    <li>
                        <span id="spnMulti_4" class="on" style="font-size: 14px; letter-spacing: -1px;">Lô trượt 4</span>
                    </li>
                    <li>
                        <span id="spnMulti_5" style="font-size: 14px; letter-spacing: -1px;">Lô trượt 5</span>
                    </li>
                    <li>
                        <span id="spnMulti_6" style="font-size: 14px; letter-spacing: -1px;">Lô trượt 6</span>
                    </li>
                    <li>
                        <span id="spnMulti_7" style="font-size: 14px; letter-spacing: -1px;">Lô trượt 7</span>
                    </li>
                    <li>
                        <span id="spnMulti_8" style="font-size: 14px; letter-spacing: -1px;">Lô trượt 8</span>
                    </li>
                    <li>
                        <span id="spnMulti_9" style="font-size: 14px; letter-spacing: -1px;">Lô trượt 9</span>
                    </li>
                    <li>
                        <span id="spnMulti_10" style="font-size: 14px; letter-spacing: -1px;">Lô trượt 10</span>
                    </li>
                </ul>
            </div>
            <div class="PopUps_content02 Multiple_Choices">
                <table class="SelectList02" style="table-layout: auto;">
                    <tbody>
                    <tr>
                        <td id="tdMultiId_00">00</td>
                        <td id="tdMultiId_01">01</td>
                        <td id="tdMultiId_02">02</td>
                        <td id="tdMultiId_03">03</td>
                        <td id="tdMultiId_04">04</td>
                        <td id="tdMultiId_05">05</td>
                        <td id="tdMultiId_06">06</td>
                        <td id="tdMultiId_07">07</td>
                        <td id="tdMultiId_08">08</td>
                        <td id="tdMultiId_09">09</td>
                    </tr>
                    <tr>
                        <td id="tdMultiId_10">10</td>
                        <td id="tdMultiId_11">11</td>
                        <td id="tdMultiId_12">12</td>
                        <td id="tdMultiId_13">13</td>
                        <td id="tdMultiId_14">14</td>
                        <td id="tdMultiId_15">15</td>
                        <td id="tdMultiId_16">16</td>
                        <td id="tdMultiId_17">17</td>
                        <td id="tdMultiId_18">18</td>
                        <td id="tdMultiId_19">19</td>
                    </tr>
                    <tr>
                        <td id="tdMultiId_20">20</td>
                        <td id="tdMultiId_21">21</td>
                        <td id="tdMultiId_22">22</td>
                        <td id="tdMultiId_23">23</td>
                        <td id="tdMultiId_24">24</td>
                        <td id="tdMultiId_25">25</td>
                        <td id="tdMultiId_26">26</td>
                        <td id="tdMultiId_27">27</td>
                        <td id="tdMultiId_28">28</td>
                        <td id="tdMultiId_29">29</td>
                    </tr>
                    <tr>
                        <td id="tdMultiId_30">30</td>
                        <td id="tdMultiId_31">31</td>
                        <td id="tdMultiId_32">32</td>
                        <td id="tdMultiId_33">33</td>
                        <td id="tdMultiId_34">34</td>
                        <td id="tdMultiId_35">35</td>
                        <td id="tdMultiId_36">36</td>
                        <td id="tdMultiId_37">37</td>
                        <td id="tdMultiId_38">38</td>
                        <td id="tdMultiId_39">39</td>
                    </tr>
                    <tr>
                        <td id="tdMultiId_40">40</td>
                        <td id="tdMultiId_41">41</td>
                        <td id="tdMultiId_42">42</td>
                        <td id="tdMultiId_43">43</td>
                        <td id="tdMultiId_44">44</td>
                        <td id="tdMultiId_45">45</td>
                        <td id="tdMultiId_46">46</td>
                        <td id="tdMultiId_47">47</td>
                        <td id="tdMultiId_48">48</td>
                        <td id="tdMultiId_49">49</td>
                    </tr>
                    <tr>
                        <td id="tdMultiId_50">50</td>
                        <td id="tdMultiId_51">51</td>
                        <td id="tdMultiId_52">52</td>
                        <td id="tdMultiId_53">53</td>
                        <td id="tdMultiId_54">54</td>
                        <td id="tdMultiId_55">55</td>
                        <td id="tdMultiId_56">56</td>
                        <td id="tdMultiId_57">57</td>
                        <td id="tdMultiId_58">58</td>
                        <td id="tdMultiId_59">59</td>
                    </tr>
                    <tr>
                        <td id="tdMultiId_60">60</td>
                        <td id="tdMultiId_61">61</td>
                        <td id="tdMultiId_62">62</td>
                        <td id="tdMultiId_63">63</td>
                        <td id="tdMultiId_64">64</td>
                        <td id="tdMultiId_65">65</td>
                        <td id="tdMultiId_66">66</td>
                        <td id="tdMultiId_67">67</td>
                        <td id="tdMultiId_68">68</td>
                        <td id="tdMultiId_69">69</td>
                    </tr>
                    <tr>
                        <td id="tdMultiId_70">70</td>
                        <td id="tdMultiId_71">71</td>
                        <td id="tdMultiId_72">72</td>
                        <td id="tdMultiId_73">73</td>
                        <td id="tdMultiId_74">74</td>
                        <td id="tdMultiId_75">75</td>
                        <td id="tdMultiId_76">76</td>
                        <td id="tdMultiId_77">77</td>
                        <td id="tdMultiId_78">78</td>
                        <td id="tdMultiId_79">79</td>
                    </tr>
                    <tr>
                        <td id="tdMultiId_80">80</td>
                        <td id="tdMultiId_81">81</td>
                        <td id="tdMultiId_82">82</td>
                        <td id="tdMultiId_83">83</td>
                        <td id="tdMultiId_84">84</td>
                        <td id="tdMultiId_85">85</td>
                        <td id="tdMultiId_86">86</td>
                        <td id="tdMultiId_87">87</td>
                        <td id="tdMultiId_88">88</td>
                        <td id="tdMultiId_89">89</td>
                    </tr>
                    <tr>
                        <td id="tdMultiId_90">90</td>
                        <td id="tdMultiId_91">91</td>
                        <td id="tdMultiId_92">92</td>
                        <td id="tdMultiId_93">93</td>
                        <td id="tdMultiId_94">94</td>
                        <td id="tdMultiId_95">95</td>
                        <td id="tdMultiId_96">96</td>
                        <td id="tdMultiId_97">97</td>
                        <td id="tdMultiId_98">98</td>
                        <td id="tdMultiId_99">99</td>
                    </tr>
                    </tbody>
                </table>
                <div class="scroll-wrapper FunctionBar02 Multiple_Choices scrollbar-macosx" style="position: relative;">
                    <div id="divMultiTitle" class="FunctionBar02 Multiple_Choices scrollbar-macosx scroll-content"
                         style="margin-right: 0px; height: 285px; max-height: none;">
                        <ul></ul>
                    </div>
                    <div class="scroll-element scroll-x">
                        <div class="scroll-element_outer">
                            <div class="scroll-element_size"></div>
                            <div class="scroll-element_track"></div>
                            <div class="scroll-bar"></div>
                        </div>
                    </div>
                    <div class="scroll-element scroll-y">
                        <div class="scroll-element_outer">
                            <div class="scroll-element_size"></div>
                            <div class="scroll-element_track"></div>
                            <div class="scroll-bar"></div>
                        </div>
                    </div>
                </div>
                <div class="FunctionBar02_bot Multiple_Choices">
                    <div class="SelectResult02">
                        <div class="importWrapL">
                            Tiền cược：<input type="text" id="txbFastMultiAmtSync" class="importBox02 bet"
                                             style="width: 65px;">
                            <a id="aClearMultiAmtSync" class="btn_close" style="right: 122px; display: none;"></a>
                        </div>
                        <div class="importWrapR" style="margin-right: 1px;">
                            Gồm <span id="spnMultiBetNum" class="colorDblue">0</span> đơn
                        </div>
                    </div>
                    <div id="divBetListPeriodFastMulti" class="Js_betItem3">
                        Kỳ liên tiếp：<a class="Js_periodText" onclick="$('#divExplanation_Period').show();"><img
                        src="https://kuvn-cf.nsb777.net/images/graph/anyTime/icon_ay2Hint.png"></a>
                        <div class="Js_periodNumber">
                            <a class="Js_chipArrowL" onclick="CheckPeriodInput(-1)"></a>
                            <input id="txbPeriod_FastMulti" onkeyup="CheckPeriodInput(0)" type="text" value="1"
                                   maxlength="3">
                            <a class="Js_chipArrowR" onclick="CheckPeriodInput(1)"></a>
                        </div>
                    </div>
                    <div class="btn_wrap02 vn">
                        <input type="button" value="Hủy" class="Js_cancel" onclick="ClearWagers(false)">
                        <input id="btnFastMultiWagers" type="button" value="Xác nhận gửi đi"
                               class="Js_confirm btn_betConfirmNone" onclick="MultiBetWagers()">
                    </div>
                </div>
            </div>
        </div>


        <div id="divPopUp_SingleMulti" class="PopUps" style="display:none; z-index: 101; left: 46px;">
            <div id="divSingleMultiTitle" class="PopUps_title">
                Lô trượt nhập số
                <div class="btn_close" style="top: 20px;" onclick="CloseFastWindow(true)"></div>
            </div>
            <div class="FunctionBar02_title Multiple_Choices">
                <ul>
                    <li>
                    <span id="spnSingleMulti_4" class="on"
                          style="font-size: 14px; letter-spacing: -1px;">Lô trượt 4</span>
                    </li>
                    <li>
                        <span id="spnSingleMulti_5" style="font-size: 14px; letter-spacing: -1px;">Lô trượt 5</span>
                    </li>
                    <li>
                        <span id="spnSingleMulti_6" style="font-size: 14px; letter-spacing: -1px;">Lô trượt 6</span>
                    </li>
                    <li>
                        <span id="spnSingleMulti_7" style="font-size: 14px; letter-spacing: -1px;">Lô trượt 7</span>
                    </li>
                    <li>
                        <span id="spnSingleMulti_8" style="font-size: 14px; letter-spacing: -1px;">Lô trượt 8</span>
                    </li>
                    <li>
                        <span id="spnSingleMulti_9" style="font-size: 14px; letter-spacing: -1px;">Lô trượt 9</span>
                    </li>
                    <li>
                        <span id="spnSingleMulti_10" style="font-size: 14px; letter-spacing: -1px;">Lô trượt 10</span>
                    </li>
                </ul>
            </div>
            <div class="PopUps_content02 Multiple_Choices">
                <div class="SelectListSingleMulti">
                    <div class="scroll-wrapper inputArea scrollbar-macosx scroll-textarea" style="position: relative;">
                        <div class="scroll-content" style="margin-right: 0px; height: 306.333px; max-height: none;">
                        <textarea id="txbArea_SingleMulti" class="inputArea scrollbar-macosx"
                                  placeholder="Nhập số đặt cược"></textarea></div>
                        <div class="scroll-element scroll-x">
                            <div class="scroll-element_outer">
                                <div class="scroll-element_size"></div>
                                <div class="scroll-element_track"></div>
                                <div class="scroll-bar"></div>
                            </div>
                        </div>
                        <div class="scroll-element scroll-y">
                            <div class="scroll-element_outer">
                                <div class="scroll-element_size"></div>
                                <div class="scroll-element_track"></div>
                                <div class="scroll-bar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="Singlebtn_Box">
                        <div class="btn_Box">
                            <a class="Js_clear" onclick="ClearSingleKeyIn()">Xóa</a>
                            <a id="btnAddList_SingleMulti" class="Js_addmenu" style="width: 125px;">Thêm vào D.sách</a>
                        </div>
                        <div class="result_show" style="padding-top: 13px;">
                            <p>Đã nhập <span id="spnHintSingleMulti" class="t_blue">0</span> đơn</p>
                            <a onclick="$('#divExplanation_MultiInNone').show();"><img
                                src="https://kuvn-cf.nsb777.net/images/graph/anyTime/icon_ay2Hint.png"
                                style="margin-top: 0px;"></a>
                        </div>
                    </div>
                </div>
                <div class="scroll-wrapper FunctionBar03 Multiple_Choices scrollbar-macosx border_top"
                     style="position: relative;">
                    <div id="BetSingleMultiListTitle"
                         class="FunctionBar03 Multiple_Choices scrollbar-macosx border_top scroll-content"
                         style="margin-right: 0px; height: 244px; max-height: none;">
                        <ul></ul>
                    </div>
                    <div class="scroll-element scroll-x">
                        <div class="scroll-element_outer">
                            <div class="scroll-element_size"></div>
                            <div class="scroll-element_track"></div>
                            <div class="scroll-bar"></div>
                        </div>
                    </div>
                    <div class="scroll-element scroll-y">
                        <div class="scroll-element_outer">
                            <div class="scroll-element_size"></div>
                            <div class="scroll-element_track"></div>
                            <div class="scroll-bar"></div>
                        </div>
                    </div>
                </div>
                <div class="FunctionBar02_bot Multiple_Choices">
                    <div class="SelectResult02">
                        <div class="importWrapL">
                            Tiền cược：<input type="text" id="txbSingleMultiAmtSync" class="importBox02 bet vn">
                            <a id="aClearSingleMultiAmtSync" class="btn_close" style="right: 118px; display: none;"></a>
                        </div>
                        <div class="importWrapR" style="margin-right: 1px;">
                            Gồm <span id="spnBetNumSingleMulti" class="colorDblue">0</span> đơn
                        </div>
                    </div>
                    <div id="divBetListPeriodSingleMulti" class="Js_betItem3">
                        Kỳ liên tiếp：<a class="Js_periodText" onclick="$('#divExplanation_Period').show();"><img
                        src="https://kuvn-cf.nsb777.net/images/graph/anyTime/icon_ay2Hint.png"></a>
                        <div class="Js_periodNumber">
                            <a class="Js_chipArrowL" onclick="CheckPeriodInput(-1)"></a>
                            <input id="txbPeriod_SingleMulti" onkeyup="CheckPeriodInput(0)" type="text" value="1"
                                   maxlength="3">
                            <a class="Js_chipArrowR" onclick="CheckPeriodInput(1)"></a>
                        </div>
                    </div>
                    <div class="btn_wrap02 vn">
                        <input type="button" value="Hủy" class="Js_cancel" onclick="ClearWagers(false)">
                        <input id="btnSingleMultiWagers" type="button" value="Xác nhận gửi đi"
                               class="Js_confirm btn_betConfirmNone" onclick="SingleMultiBetWagers()">
                    </div>
                </div>
            </div>
        </div>


        <div id="divPopUp_FastCombine" class="PopUps" style="display: none; z-index: 101;">
            <div id="divFastTitle" class="PopUps_title">
                <div class="btn_close" style="top: 20px;" onclick="CloseFastWindow(true)"></div>
            </div>
            <div id="divKeyNum">
                <input id="btnFast_Cancel" type="button" value="Hủy" class="Js_cancel_fast"">
            </div>
        </div>
        <div id="sound"></div>
        <div id="divBBWagersDialog" class="confirmBet_box CB_w410" style="display: none; z-index: 104;">
            <div id="divBBWagersGID" class="CB_T"></div>
            <div class="CB_in">
                <div class="scroll-wrapper CB_betList_box scrollbar-macosx" style="position: relative;">
                    <div class="CB_betList_box scrollbar-macosx scroll-content"
                         style="height: auto; margin-right: 0px; max-height: 0px;">
                    </div>
                    <div class="scroll-element scroll-x">
                        <div class="scroll-element_outer">
                            <div class="scroll-element_size"></div>
                            <div class="scroll-element_track"></div>
                            <div class="scroll-bar"></div>
                        </div>
                    </div>
                    <div class="scroll-element scroll-y">
                        <div class="scroll-element_outer">
                            <div class="scroll-element_size"></div>
                            <div class="scroll-element_track"></div>
                            <div class="scroll-bar"></div>
                        </div>
                    </div>
                </div>
                <hr class="CB_line">
                <ul id="ulBetWagersInfo_Fast" class="CB_betInfo">
                    <li>Gồm <span id="spnBBWagersBump" class="CB_t_blue">0</span> đơn</li>
                    <li id="liBetWagersTotal_Fast">T.tiền cược：<span id="spnBBWagersTotal" class="CB_total"></span></li>
                </ul>
                <ul id="ulBetWagersDelGid_Fast" style="display: none; list-style: none;">
                    <li>
                        <div id="divDelGid_Fast" class="CB_prompt"></div>
                    </li>
                </ul>
                <hr class="CB_line">
                <div class="btn_CB">
                    <a id="btnBBWagersCancel" class="btn_CB_cancel" onclick="CancelWagers(true)">Hủy</a>
                    <a id="btnBBWagersConfirm" class="btn_CB_confirm" onclick="SendWagers()">Xác nhận</a>
                </div>
            </div>
        </div>
        <div id="divDialogBetSuccess" class="confirmBet_box CB_t210">
            <div class="CB_T2" onmouseover="DivMove(this,'divDialogBetSuccess')">Đặt cược hoàn tất</div>
            <div class="CB_in">
                <div class="CB_text">
                    <div class="CB_textIn">Xin vui lòng đến <br><a id="fontBetQuery" class="CB_a" style="cursor: pointer;">"Lịch
                        sử đặt cược"</a><br> để kiểm tra
                    </div>
                </div>
                <hr class="CB_line">
                <div class="btn_CB">
                    <a class="btn_CB_confirm">Xác nhận<span class="CB_t_yellow"></span></a>
                </div>
            </div>
        </div>
        <div id="divAttentionDialog" class="confirmBet_box CB_t210" style="z-index: 104;">
            <div class="CB_T3" onmouseover="DivMove(this,'divAttentionDialog')">Chú ý</div>
            <div class="CB_in">
                <div id="divAttentionContent"></div>
                <hr class="CB_line">
                <div id="divAttentionCancel" class="btn_CB">
                    <a class="btn_CB_confirm" onclick="HideAttentionDialog()">Đóng</a>
                </div>
            </div>
        </div>
        <div id="divAllChip2" class="LtBallListChip">
            <div id="divChip2_0" data-value="1" class="chip_Text icon_chip_1"><span>1</span></div>
            <div id="divChip2_1" data-value="10" class="chip_Text icon_chip_10"><span>10</span></div>
            <div id="divChip2_2" data-value="100" class="chip_Text icon_chip_100"><span>100</span></div>
            <div id="divChip2_3" data-value="500" class="chip_Text icon_chip_500"><span>500</span></div>
            <div id="divChip2_4" data-value="1000" class="chip_Text icon_chip_1000"><span>1K</span></div>
            <div id="divChipsSetting2" class="chip_Custom chipSizeChg vn"><span id="spnChipsText">Chọn</span></div>
        </div>
    </div>
</template>

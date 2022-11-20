<div class="container py-3">
    <h1>Least Cost</h1>
    <hr>
    <span id="ContentPlaceHolder1_lblExampleTitle" class="ExampleTitle">
        
        <h3>1. Algorithm &amp; Example-1</h3>
    </span>
    <span id="ContentPlaceHolder1_lblExample">
        <br><br><b>Algorithm</b><br>
        <table class="tableExaAlgo">
            <tbody>
                <tr>
                    <td colspan="2">
                        <b>Least Cost Method (LCM) Steps (Rule)</b>
                    </td>
                </tr>
                <tr>
                    <td align="right" nowrap="" valign="top">
                        Step-1:
                    </td>
                    <td>
                        Select the cell having minimum unit cost <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-1-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1"><span class="MJXp-mstyle" id="MJXp-Span-2"><span class="MJXp-msub" id="MJXp-Span-3"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-4" style="margin-right: 0.05em;">c</span><span class="MJXp-mrow MJXp-script" id="MJXp-Span-5" style="vertical-align: -0.4em;"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-6">i</span><span class="MJXp-mi MJXp-italic" id="MJXp-Span-7">j</span></span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-1">c_(ij)</script> and allocate as much as possible, i.e. <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-2-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-8"><span class="MJXp-mstyle" id="MJXp-Span-9"><span class="MJXp-mo" id="MJXp-Span-10" style="margin-left: 0.333em; margin-right: 0.333em;">min</span><span class="MJXp-mrow" id="MJXp-Span-11"><span class="MJXp-mo" id="MJXp-Span-12" style="margin-left: 0em; margin-right: 0em; vertical-align: -0.244em;"><span class="MJXp-right MJXp-scale7" style="font-size: 1.978em; margin-left: -0.05em;">(</span></span><span class="MJXp-msub" id="MJXp-Span-13"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-14" style="margin-right: 0.05em;">s</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-15" style="vertical-align: -0.4em;">i</span></span><span class="MJXp-mo" id="MJXp-Span-16" style="margin-left: 0em; margin-right: 0.222em;">,</span><span class="MJXp-msub" id="MJXp-Span-17"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-18" style="margin-right: 0.05em;">d</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-19" style="vertical-align: -0.4em;">j</span></span><span class="MJXp-mo" id="MJXp-Span-20" style="margin-left: 0em; margin-right: 0em; vertical-align: -0.244em;"><span class="MJXp-right MJXp-scale7" style="font-size: 1.978em; margin-left: -0.05em;">)</span></span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-2">min(s_i, d_j)</script>.
                    </td>
                </tr>
                <tr>
                    <td align="right" nowrap="" valign="top">
                        Step-2:
                    </td>
                    <td>
                        a. Subtract this <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-3-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-21"><span class="MJXp-mstyle" id="MJXp-Span-22"><span class="MJXp-mo" id="MJXp-Span-23" style="margin-left: 0.333em; margin-right: 0.333em;">min</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-3">min</script> value from supply <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-4-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-24"><span class="MJXp-mstyle" id="MJXp-Span-25"><span class="MJXp-msub" id="MJXp-Span-26"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-27" style="margin-right: 0.05em;">s</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-28" style="vertical-align: -0.4em;">i</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-4">s_i</script> and demand <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-5-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-29"><span class="MJXp-mstyle" id="MJXp-Span-30"><span class="MJXp-msub" id="MJXp-Span-31"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-32" style="margin-right: 0.05em;">d</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-33" style="vertical-align: -0.4em;">j</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-5">d_j</script>.
                        <br><br>b. If the supply <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-6-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-34"><span class="MJXp-mstyle" id="MJXp-Span-35"><span class="MJXp-msub" id="MJXp-Span-36"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-37" style="margin-right: 0.05em;">s</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-38" style="vertical-align: -0.4em;">i</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-6">s_i</script> is 0, then cross (strike) that row and If the demand <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-7-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-39"><span class="MJXp-mstyle" id="MJXp-Span-40"><span class="MJXp-msub" id="MJXp-Span-41"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-42" style="margin-right: 0.05em;">d</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-43" style="vertical-align: -0.4em;">j</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-7">d_j</script> is 0 then cross (strike) that column.
                        <br><br>c. If min unit cost cell is not unique, then select the cell where maximum allocation can be possible
                    </td>
                </tr>
                <tr>
                    <td align="right" nowrap="" valign="top">
                        Step-3:
                    </td>
                    <td>
                        Repeat this steps for all uncrossed (unstriked) rows and columns until all supply and demand values are 0.
                    </td>
                </tr>
            </tbody>
        </table>
        <hr><b>Example-1</b><br>
        <b>Find Solution using Least Cost method<br>
            <table class="tableHelp">
                <tbody>
                    <tr>
                        <td></td>
                        <td>D1</td>
                        <td>D2</td>
                        <td>D3</td>
                        <td>D4</td>
                        <td>Supply</td>
                    </tr>
                    <tr>
                        <td>S1</td>
                        <td>19</td>
                        <td>30</td>
                        <td>50</td>
                        <td>10</td>
                        <td>7</td>
                    </tr>
                    <tr>
                        <td>S2</td>
                        <td>70</td>
                        <td>30</td>
                        <td>40</td>
                        <td>60</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td>S3</td>
                        <td>40</td>
                        <td>8</td>
                        <td>70</td>
                        <td>20</td>
                        <td>18</td>
                    </tr>
                    <tr>
                        <td>Demand</td>
                        <td>5</td>
                        <td>8</td>
                        <td>7</td>
                        <td>14</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </b><br><br><b>Solution:</b><br>TOTAL number of supply constraints : 3<br>TOTAL number of demand constraints : 4<br>Problem Table is <br>
        <table border="1" cellspacing="0" cellpadding="6" style="border-collapse:collapse;">
            <tbody>
                <tr align="left">
                    <td nowrap=""> </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-8-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-44"><span class="MJXp-mstyle" id="MJXp-Span-45"><span class="MJXp-msub" id="MJXp-Span-46"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-47" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-48" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-8">D_1</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-9-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-49"><span class="MJXp-mstyle" id="MJXp-Span-50"><span class="MJXp-msub" id="MJXp-Span-51"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-52" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-53" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-9">D_2</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-10-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-54"><span class="MJXp-mstyle" id="MJXp-Span-55"><span class="MJXp-msub" id="MJXp-Span-56"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-57" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-58" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-10">D_3</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-11-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-59"><span class="MJXp-mstyle" id="MJXp-Span-60"><span class="MJXp-msub" id="MJXp-Span-61"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-62" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-63" style="vertical-align: -0.4em;">4</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-11">D_4</script>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">Supply</td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-12-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-64"><span class="MJXp-mstyle" id="MJXp-Span-65"><span class="MJXp-msub" id="MJXp-Span-66"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-67" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-68" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-12">S_1</script>
                    </td>
                    <td nowrap="">19</td>
                    <td nowrap="">30</td>
                    <td nowrap="">50</td>
                    <td nowrap="">10</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">7</td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-13-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-69"><span class="MJXp-mstyle" id="MJXp-Span-70"><span class="MJXp-msub" id="MJXp-Span-71"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-72" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-73" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-13">S_2</script>
                    </td>
                    <td nowrap="">70</td>
                    <td nowrap="">30</td>
                    <td nowrap="">40</td>
                    <td nowrap="">60</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">9</td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-14-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-74"><span class="MJXp-mstyle" id="MJXp-Span-75"><span class="MJXp-msub" id="MJXp-Span-76"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-77" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-78" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-14">S_3</script>
                    </td>
                    <td nowrap="">40</td>
                    <td nowrap="">8</td>
                    <td nowrap="">70</td>
                    <td nowrap="">20</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">18</td>
                </tr>
                <tr align="left">
                    <td nowrap="" style="padding: 1px;" colspan="7"> </td>
                </tr>
                <tr align="left">
                    <td nowrap="">Demand</td>
                    <td nowrap="">5</td>
                    <td nowrap="">8</td>
                    <td nowrap="">7</td>
                    <td nowrap="">14</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap=""></td>
                </tr>
            </tbody>
        </table><br><br>The smallest transportation cost is 8 in cell <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-15-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-79"><span class="MJXp-mstyle" id="MJXp-Span-80"><span class="MJXp-msub" id="MJXp-Span-81"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-82" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-83" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-msub" id="MJXp-Span-84"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-85" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-86" style="vertical-align: -0.4em;">2</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-15">S_3 D_2</script><br><br>The allocation to this cell is min(18,8) = <font color="red"><b>8</b></font>. <br>This satisfies the entire demand of <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-16-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-87"><span class="MJXp-mstyle" id="MJXp-Span-88"><span class="MJXp-msub" id="MJXp-Span-89"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-90" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-91" style="vertical-align: -0.4em;">2</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-16">D_2</script> and leaves 18 - 8 = 10 units with <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-17-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-92"><span class="MJXp-mstyle" id="MJXp-Span-93"><span class="MJXp-msub" id="MJXp-Span-94"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-95" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-96" style="vertical-align: -0.4em;">3</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-17">S_3</script><br><br>Table-1<br>
        <table border="1" cellspacing="0" cellpadding="6" style="border-collapse:collapse;">
            <tbody>
                <tr align="center">
                    <td nowrap=""> </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-18-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-97"><span class="MJXp-mstyle" id="MJXp-Span-98"><span class="MJXp-msub" id="MJXp-Span-99"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-100" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-101" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-18">D_1</script>
                    </td>
                    <td nowrap="" class="vStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-19-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-102"><span class="MJXp-mstyle" id="MJXp-Span-103"><span class="MJXp-msub" id="MJXp-Span-104"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-105" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-106" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-19">D_2</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-20-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-107"><span class="MJXp-mstyle" id="MJXp-Span-108"><span class="MJXp-msub" id="MJXp-Span-109"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-110" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-111" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-20">D_3</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-21-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-112"><span class="MJXp-mstyle" id="MJXp-Span-113"><span class="MJXp-msub" id="MJXp-Span-114"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-115" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-116" style="vertical-align: -0.4em;">4</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-21">D_4</script>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">Supply</td>
                </tr>
                <tr align="center">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-22-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-117"><span class="MJXp-mstyle" id="MJXp-Span-118"><span class="MJXp-msub" id="MJXp-Span-119"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-120" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-121" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-22">S_1</script>
                    </td>
                    <td nowrap="">19</td>
                    <td nowrap="" class="vStrike ">30</td>
                    <td nowrap="">50</td>
                    <td nowrap="">10</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">7</td>
                </tr>
                <tr align="center">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-23-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-122"><span class="MJXp-mstyle" id="MJXp-Span-123"><span class="MJXp-msub" id="MJXp-Span-124"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-125" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-126" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-23">S_2</script>
                    </td>
                    <td nowrap="">70</td>
                    <td nowrap="" class="vStrike ">30</td>
                    <td nowrap="">40</td>
                    <td nowrap="">60</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">9</td>
                </tr>
                <tr align="center">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-24-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-127"><span class="MJXp-mstyle" id="MJXp-Span-128"><span class="MJXp-msub" id="MJXp-Span-129"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-130" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-131" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-24">S_3</script>
                    </td>
                    <td nowrap="">40</td>
                    <td nowrap="" class="vStrike ">8<font color="red"><b>(8)</b></font>
                    </td>
                    <td nowrap="">70</td>
                    <td nowrap="">20</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">10</td>
                </tr>
                <tr align="center">
                    <td nowrap="" style="padding: 1px;" colspan="7"> </td>
                </tr>
                <tr align="center">
                    <td nowrap="">Demand</td>
                    <td nowrap="">5</td>
                    <td nowrap="">0</td>
                    <td nowrap="">7</td>
                    <td nowrap="">14</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap=""></td>
                </tr>
            </tbody>
        </table><br><br>The smallest transportation cost is 10 in cell <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-25-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-132"><span class="MJXp-mstyle" id="MJXp-Span-133"><span class="MJXp-msub" id="MJXp-Span-134"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-135" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-136" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-msub" id="MJXp-Span-137"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-138" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-139" style="vertical-align: -0.4em;">4</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-25">S_1 D_4</script><br><br>The allocation to this cell is min(7,14) = <font color="red"><b>7</b></font>. <br>This exhausts the capacity of <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-26-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-140"><span class="MJXp-mstyle" id="MJXp-Span-141"><span class="MJXp-msub" id="MJXp-Span-142"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-143" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-144" style="vertical-align: -0.4em;">1</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-26">S_1</script> and leaves 14 - 7 = 7 units with <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-27-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-145"><span class="MJXp-mstyle" id="MJXp-Span-146"><span class="MJXp-msub" id="MJXp-Span-147"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-148" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-149" style="vertical-align: -0.4em;">4</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-27">D_4</script><br><br>Table-2<br>
        <table border="1" cellspacing="0" cellpadding="6" style="border-collapse:collapse;">
            <tbody>
                <tr align="center">
                    <td nowrap=""> </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-28-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-150"><span class="MJXp-mstyle" id="MJXp-Span-151"><span class="MJXp-msub" id="MJXp-Span-152"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-153" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-154" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-28">D_1</script>
                    </td>
                    <td nowrap="" class="vStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-29-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-155"><span class="MJXp-mstyle" id="MJXp-Span-156"><span class="MJXp-msub" id="MJXp-Span-157"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-158" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-159" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-29">D_2</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-30-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-160"><span class="MJXp-mstyle" id="MJXp-Span-161"><span class="MJXp-msub" id="MJXp-Span-162"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-163" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-164" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-30">D_3</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-31-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-165"><span class="MJXp-mstyle" id="MJXp-Span-166"><span class="MJXp-msub" id="MJXp-Span-167"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-168" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-169" style="vertical-align: -0.4em;">4</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-31">D_4</script>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">Supply</td>
                </tr>
                <tr align="center">
                    <td nowrap="" class="hStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-32-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-170"><span class="MJXp-mstyle" id="MJXp-Span-171"><span class="MJXp-msub" id="MJXp-Span-172"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-173" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-174" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-32">S_1</script>
                    </td>
                    <td nowrap="" class="hStrike ">19</td>
                    <td nowrap="" class="hStrike vStrike ">30</td>
                    <td nowrap="" class="hStrike ">50</td>
                    <td nowrap="" class="hStrike ">10<font color="red"><b>(7)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">0</td>
                </tr>
                <tr align="center">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-33-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-175"><span class="MJXp-mstyle" id="MJXp-Span-176"><span class="MJXp-msub" id="MJXp-Span-177"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-178" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-179" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-33">S_2</script>
                    </td>
                    <td nowrap="">70</td>
                    <td nowrap="" class="vStrike ">30</td>
                    <td nowrap="">40</td>
                    <td nowrap="">60</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">9</td>
                </tr>
                <tr align="center">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-34-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-180"><span class="MJXp-mstyle" id="MJXp-Span-181"><span class="MJXp-msub" id="MJXp-Span-182"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-183" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-184" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-34">S_3</script>
                    </td>
                    <td nowrap="">40</td>
                    <td nowrap="" class="vStrike ">8<font color="red"><b>(8)</b></font>
                    </td>
                    <td nowrap="">70</td>
                    <td nowrap="">20</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">10</td>
                </tr>
                <tr align="center">
                    <td nowrap="" style="padding: 1px;" colspan="7"> </td>
                </tr>
                <tr align="center">
                    <td nowrap="">Demand</td>
                    <td nowrap="">5</td>
                    <td nowrap="">0</td>
                    <td nowrap="">7</td>
                    <td nowrap="">7</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap=""></td>
                </tr>
            </tbody>
        </table><br><br>The smallest transportation cost is 20 in cell <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-35-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-185"><span class="MJXp-mstyle" id="MJXp-Span-186"><span class="MJXp-msub" id="MJXp-Span-187"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-188" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-189" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-msub" id="MJXp-Span-190"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-191" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-192" style="vertical-align: -0.4em;">4</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-35">S_3 D_4</script><br><br>The allocation to this cell is min(10,7) = <font color="red"><b>7</b></font>. <br>This satisfies the entire demand of <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-36-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-193"><span class="MJXp-mstyle" id="MJXp-Span-194"><span class="MJXp-msub" id="MJXp-Span-195"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-196" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-197" style="vertical-align: -0.4em;">4</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-36">D_4</script> and leaves 10 - 7 = 3 units with <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-37-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-198"><span class="MJXp-mstyle" id="MJXp-Span-199"><span class="MJXp-msub" id="MJXp-Span-200"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-201" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-202" style="vertical-align: -0.4em;">3</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-37">S_3</script><br><br>Table-3<br>
        <table border="1" cellspacing="0" cellpadding="6" style="border-collapse:collapse;">
            <tbody>
                <tr align="center">
                    <td nowrap=""> </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-38-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-203"><span class="MJXp-mstyle" id="MJXp-Span-204"><span class="MJXp-msub" id="MJXp-Span-205"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-206" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-207" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-38">D_1</script>
                    </td>
                    <td nowrap="" class="vStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-39-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-208"><span class="MJXp-mstyle" id="MJXp-Span-209"><span class="MJXp-msub" id="MJXp-Span-210"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-211" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-212" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-39">D_2</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-40-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-213"><span class="MJXp-mstyle" id="MJXp-Span-214"><span class="MJXp-msub" id="MJXp-Span-215"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-216" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-217" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-40">D_3</script>
                    </td>
                    <td nowrap="" class="vStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-41-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-218"><span class="MJXp-mstyle" id="MJXp-Span-219"><span class="MJXp-msub" id="MJXp-Span-220"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-221" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-222" style="vertical-align: -0.4em;">4</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-41">D_4</script>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">Supply</td>
                </tr>
                <tr align="center">
                    <td nowrap="" class="hStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-42-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-223"><span class="MJXp-mstyle" id="MJXp-Span-224"><span class="MJXp-msub" id="MJXp-Span-225"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-226" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-227" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-42">S_1</script>
                    </td>
                    <td nowrap="" class="hStrike ">19</td>
                    <td nowrap="" class="hStrike vStrike ">30</td>
                    <td nowrap="" class="hStrike ">50</td>
                    <td nowrap="" class="hStrike vStrike ">10<font color="red"><b>(7)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">0</td>
                </tr>
                <tr align="center">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-43-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-228"><span class="MJXp-mstyle" id="MJXp-Span-229"><span class="MJXp-msub" id="MJXp-Span-230"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-231" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-232" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-43">S_2</script>
                    </td>
                    <td nowrap="">70</td>
                    <td nowrap="" class="vStrike ">30</td>
                    <td nowrap="">40</td>
                    <td nowrap="" class="vStrike ">60</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">9</td>
                </tr>
                <tr align="center">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-44-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-233"><span class="MJXp-mstyle" id="MJXp-Span-234"><span class="MJXp-msub" id="MJXp-Span-235"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-236" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-237" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-44">S_3</script>
                    </td>
                    <td nowrap="">40</td>
                    <td nowrap="" class="vStrike ">8<font color="red"><b>(8)</b></font>
                    </td>
                    <td nowrap="">70</td>
                    <td nowrap="" class="vStrike ">20<font color="red"><b>(7)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">3</td>
                </tr>
                <tr align="center">
                    <td nowrap="" style="padding: 1px;" colspan="7"> </td>
                </tr>
                <tr align="center">
                    <td nowrap="">Demand</td>
                    <td nowrap="">5</td>
                    <td nowrap="">0</td>
                    <td nowrap="">7</td>
                    <td nowrap="">0</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap=""></td>
                </tr>
            </tbody>
        </table><br><br>The smallest transportation cost is 40 in cell <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-45-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-238"><span class="MJXp-mstyle" id="MJXp-Span-239"><span class="MJXp-msub" id="MJXp-Span-240"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-241" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-242" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-msub" id="MJXp-Span-243"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-244" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-245" style="vertical-align: -0.4em;">3</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-45">S_2 D_3</script><br><br>The allocation to this cell is min(9,7) = <font color="red"><b>7</b></font>. <br>This satisfies the entire demand of <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-46-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-246"><span class="MJXp-mstyle" id="MJXp-Span-247"><span class="MJXp-msub" id="MJXp-Span-248"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-249" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-250" style="vertical-align: -0.4em;">3</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-46">D_3</script> and leaves 9 - 7 = 2 units with <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-47-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-251"><span class="MJXp-mstyle" id="MJXp-Span-252"><span class="MJXp-msub" id="MJXp-Span-253"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-254" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-255" style="vertical-align: -0.4em;">2</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-47">S_2</script><br><br>Table-4<br>
        <table border="1" cellspacing="0" cellpadding="6" style="border-collapse:collapse;">
            <tbody>
                <tr align="center">
                    <td nowrap=""> </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-48-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-256"><span class="MJXp-mstyle" id="MJXp-Span-257"><span class="MJXp-msub" id="MJXp-Span-258"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-259" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-260" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-48">D_1</script>
                    </td>
                    <td nowrap="" class="vStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-49-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-261"><span class="MJXp-mstyle" id="MJXp-Span-262"><span class="MJXp-msub" id="MJXp-Span-263"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-264" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-265" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-49">D_2</script>
                    </td>
                    <td nowrap="" class="vStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-50-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-266"><span class="MJXp-mstyle" id="MJXp-Span-267"><span class="MJXp-msub" id="MJXp-Span-268"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-269" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-270" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-50">D_3</script>
                    </td>
                    <td nowrap="" class="vStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-51-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-271"><span class="MJXp-mstyle" id="MJXp-Span-272"><span class="MJXp-msub" id="MJXp-Span-273"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-274" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-275" style="vertical-align: -0.4em;">4</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-51">D_4</script>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">Supply</td>
                </tr>
                <tr align="center">
                    <td nowrap="" class="hStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-52-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-276"><span class="MJXp-mstyle" id="MJXp-Span-277"><span class="MJXp-msub" id="MJXp-Span-278"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-279" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-280" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-52">S_1</script>
                    </td>
                    <td nowrap="" class="hStrike ">19</td>
                    <td nowrap="" class="hStrike vStrike ">30</td>
                    <td nowrap="" class="hStrike vStrike ">50</td>
                    <td nowrap="" class="hStrike vStrike ">10<font color="red"><b>(7)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">0</td>
                </tr>
                <tr align="center">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-53-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-281"><span class="MJXp-mstyle" id="MJXp-Span-282"><span class="MJXp-msub" id="MJXp-Span-283"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-284" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-285" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-53">S_2</script>
                    </td>
                    <td nowrap="">70</td>
                    <td nowrap="" class="vStrike ">30</td>
                    <td nowrap="" class="vStrike ">40<font color="red"><b>(7)</b></font>
                    </td>
                    <td nowrap="" class="vStrike ">60</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">2</td>
                </tr>
                <tr align="center">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-54-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-286"><span class="MJXp-mstyle" id="MJXp-Span-287"><span class="MJXp-msub" id="MJXp-Span-288"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-289" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-290" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-54">S_3</script>
                    </td>
                    <td nowrap="">40</td>
                    <td nowrap="" class="vStrike ">8<font color="red"><b>(8)</b></font>
                    </td>
                    <td nowrap="" class="vStrike ">70</td>
                    <td nowrap="" class="vStrike ">20<font color="red"><b>(7)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">3</td>
                </tr>
                <tr align="center">
                    <td nowrap="" style="padding: 1px;" colspan="7"> </td>
                </tr>
                <tr align="center">
                    <td nowrap="">Demand</td>
                    <td nowrap="">5</td>
                    <td nowrap="">0</td>
                    <td nowrap="">0</td>
                    <td nowrap="">0</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap=""></td>
                </tr>
            </tbody>
        </table><br><br>The smallest transportation cost is 40 in cell <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-55-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-291"><span class="MJXp-mstyle" id="MJXp-Span-292"><span class="MJXp-msub" id="MJXp-Span-293"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-294" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-295" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-msub" id="MJXp-Span-296"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-297" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-298" style="vertical-align: -0.4em;">1</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-55">S_3 D_1</script><br><br>The allocation to this cell is min(3,5) = <font color="red"><b>3</b></font>. <br>This exhausts the capacity of <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-56-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-299"><span class="MJXp-mstyle" id="MJXp-Span-300"><span class="MJXp-msub" id="MJXp-Span-301"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-302" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-303" style="vertical-align: -0.4em;">3</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-56">S_3</script> and leaves 5 - 3 = 2 units with <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-57-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-304"><span class="MJXp-mstyle" id="MJXp-Span-305"><span class="MJXp-msub" id="MJXp-Span-306"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-307" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-308" style="vertical-align: -0.4em;">1</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-57">D_1</script><br><br>Table-5<br>
        <table border="1" cellspacing="0" cellpadding="6" style="border-collapse:collapse;">
            <tbody>
                <tr align="center">
                    <td nowrap=""> </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-58-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-309"><span class="MJXp-mstyle" id="MJXp-Span-310"><span class="MJXp-msub" id="MJXp-Span-311"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-312" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-313" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-58">D_1</script>
                    </td>
                    <td nowrap="" class="vStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-59-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-314"><span class="MJXp-mstyle" id="MJXp-Span-315"><span class="MJXp-msub" id="MJXp-Span-316"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-317" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-318" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-59">D_2</script>
                    </td>
                    <td nowrap="" class="vStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-60-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-319"><span class="MJXp-mstyle" id="MJXp-Span-320"><span class="MJXp-msub" id="MJXp-Span-321"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-322" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-323" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-60">D_3</script>
                    </td>
                    <td nowrap="" class="vStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-61-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-324"><span class="MJXp-mstyle" id="MJXp-Span-325"><span class="MJXp-msub" id="MJXp-Span-326"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-327" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-328" style="vertical-align: -0.4em;">4</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-61">D_4</script>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">Supply</td>
                </tr>
                <tr align="center">
                    <td nowrap="" class="hStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-62-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-329"><span class="MJXp-mstyle" id="MJXp-Span-330"><span class="MJXp-msub" id="MJXp-Span-331"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-332" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-333" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-62">S_1</script>
                    </td>
                    <td nowrap="" class="hStrike ">19</td>
                    <td nowrap="" class="hStrike vStrike ">30</td>
                    <td nowrap="" class="hStrike vStrike ">50</td>
                    <td nowrap="" class="hStrike vStrike ">10<font color="red"><b>(7)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">0</td>
                </tr>
                <tr align="center">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-63-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-334"><span class="MJXp-mstyle" id="MJXp-Span-335"><span class="MJXp-msub" id="MJXp-Span-336"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-337" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-338" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-63">S_2</script>
                    </td>
                    <td nowrap="">70</td>
                    <td nowrap="" class="vStrike ">30</td>
                    <td nowrap="" class="vStrike ">40<font color="red"><b>(7)</b></font>
                    </td>
                    <td nowrap="" class="vStrike ">60</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">2</td>
                </tr>
                <tr align="center">
                    <td nowrap="" class="hStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-64-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-339"><span class="MJXp-mstyle" id="MJXp-Span-340"><span class="MJXp-msub" id="MJXp-Span-341"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-342" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-343" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-64">S_3</script>
                    </td>
                    <td nowrap="" class="hStrike ">40<font color="red"><b>(3)</b></font>
                    </td>
                    <td nowrap="" class="hStrike vStrike ">8<font color="red"><b>(8)</b></font>
                    </td>
                    <td nowrap="" class="hStrike vStrike ">70</td>
                    <td nowrap="" class="hStrike vStrike ">20<font color="red"><b>(7)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">0</td>
                </tr>
                <tr align="center">
                    <td nowrap="" style="padding: 1px;" colspan="7"> </td>
                </tr>
                <tr align="center">
                    <td nowrap="">Demand</td>
                    <td nowrap="">2</td>
                    <td nowrap="">0</td>
                    <td nowrap="">0</td>
                    <td nowrap="">0</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap=""></td>
                </tr>
            </tbody>
        </table><br><br>The smallest transportation cost is 70 in cell <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-65-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-344"><span class="MJXp-mstyle" id="MJXp-Span-345"><span class="MJXp-msub" id="MJXp-Span-346"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-347" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-348" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-msub" id="MJXp-Span-349"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-350" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-351" style="vertical-align: -0.4em;">1</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-65">S_2 D_1</script><br><br>The allocation to this cell is min(2,2) = <font color="red"><b>2</b></font>. <br>Table-6<br>
        <table border="1" cellspacing="0" cellpadding="6" style="border-collapse:collapse;">
            <tbody>
                <tr align="center">
                    <td nowrap=""> </td>
                    <td nowrap="" class="vStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-66-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-352"><span class="MJXp-mstyle" id="MJXp-Span-353"><span class="MJXp-msub" id="MJXp-Span-354"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-355" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-356" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-66">D_1</script>
                    </td>
                    <td nowrap="" class="vStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-67-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-357"><span class="MJXp-mstyle" id="MJXp-Span-358"><span class="MJXp-msub" id="MJXp-Span-359"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-360" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-361" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-67">D_2</script>
                    </td>
                    <td nowrap="" class="vStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-68-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-362"><span class="MJXp-mstyle" id="MJXp-Span-363"><span class="MJXp-msub" id="MJXp-Span-364"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-365" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-366" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-68">D_3</script>
                    </td>
                    <td nowrap="" class="vStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-69-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-367"><span class="MJXp-mstyle" id="MJXp-Span-368"><span class="MJXp-msub" id="MJXp-Span-369"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-370" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-371" style="vertical-align: -0.4em;">4</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-69">D_4</script>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">Supply</td>
                </tr>
                <tr align="center">
                    <td nowrap="" class="hStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-70-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-372"><span class="MJXp-mstyle" id="MJXp-Span-373"><span class="MJXp-msub" id="MJXp-Span-374"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-375" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-376" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-70">S_1</script>
                    </td>
                    <td nowrap="" class="hStrike vStrike ">19</td>
                    <td nowrap="" class="hStrike vStrike ">30</td>
                    <td nowrap="" class="hStrike vStrike ">50</td>
                    <td nowrap="" class="hStrike vStrike ">10<font color="red"><b>(7)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">0</td>
                </tr>
                <tr align="center">
                    <td nowrap="" class="hStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-71-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-377"><span class="MJXp-mstyle" id="MJXp-Span-378"><span class="MJXp-msub" id="MJXp-Span-379"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-380" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-381" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-71">S_2</script>
                    </td>
                    <td nowrap="" class="hStrike vStrike ">70<font color="red"><b>(2)</b></font>
                    </td>
                    <td nowrap="" class="hStrike vStrike ">30</td>
                    <td nowrap="" class="hStrike vStrike ">40<font color="red"><b>(7)</b></font>
                    </td>
                    <td nowrap="" class="hStrike vStrike ">60</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">0</td>
                </tr>
                <tr align="center">
                    <td nowrap="" class="hStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-72-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-382"><span class="MJXp-mstyle" id="MJXp-Span-383"><span class="MJXp-msub" id="MJXp-Span-384"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-385" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-386" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-72">S_3</script>
                    </td>
                    <td nowrap="" class="hStrike vStrike ">40<font color="red"><b>(3)</b></font>
                    </td>
                    <td nowrap="" class="hStrike vStrike ">8<font color="red"><b>(8)</b></font>
                    </td>
                    <td nowrap="" class="hStrike vStrike ">70</td>
                    <td nowrap="" class="hStrike vStrike ">20<font color="red"><b>(7)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">0</td>
                </tr>
                <tr align="center">
                    <td nowrap="" style="padding: 1px;" colspan="7"> </td>
                </tr>
                <tr align="center">
                    <td nowrap="">Demand</td>
                    <td nowrap="">0</td>
                    <td nowrap="">0</td>
                    <td nowrap="">0</td>
                    <td nowrap="">0</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap=""></td>
                </tr>
            </tbody>
        </table><br><br>Initial feasible solution is <br>
        <table border="1" cellspacing="0" cellpadding="6" style="border-collapse:collapse;">
            <tbody>
                <tr align="left">
                    <td nowrap=""> </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-73-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-387"><span class="MJXp-mstyle" id="MJXp-Span-388"><span class="MJXp-msub" id="MJXp-Span-389"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-390" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-391" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-73">D_1</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-74-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-392"><span class="MJXp-mstyle" id="MJXp-Span-393"><span class="MJXp-msub" id="MJXp-Span-394"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-395" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-396" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-74">D_2</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-75-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-397"><span class="MJXp-mstyle" id="MJXp-Span-398"><span class="MJXp-msub" id="MJXp-Span-399"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-400" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-401" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-75">D_3</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-76-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-402"><span class="MJXp-mstyle" id="MJXp-Span-403"><span class="MJXp-msub" id="MJXp-Span-404"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-405" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-406" style="vertical-align: -0.4em;">4</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-76">D_4</script>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">Supply</td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-77-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-407"><span class="MJXp-mstyle" id="MJXp-Span-408"><span class="MJXp-msub" id="MJXp-Span-409"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-410" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-411" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-77">S_1</script>
                    </td>
                    <td nowrap="">19 </td>
                    <td nowrap="">30 </td>
                    <td nowrap="">50 </td>
                    <td nowrap="">10 <font color="red"><b>(7)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">7</td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-78-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-412"><span class="MJXp-mstyle" id="MJXp-Span-413"><span class="MJXp-msub" id="MJXp-Span-414"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-415" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-416" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-78">S_2</script>
                    </td>
                    <td nowrap="">70 <font color="red"><b>(2)</b></font>
                    </td>
                    <td nowrap="">30 </td>
                    <td nowrap="">40 <font color="red"><b>(7)</b></font>
                    </td>
                    <td nowrap="">60 </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">9</td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-79-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-417"><span class="MJXp-mstyle" id="MJXp-Span-418"><span class="MJXp-msub" id="MJXp-Span-419"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-420" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-421" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-79">S_3</script>
                    </td>
                    <td nowrap="">40 <font color="red"><b>(3)</b></font>
                    </td>
                    <td nowrap="">8 <font color="red"><b>(8)</b></font>
                    </td>
                    <td nowrap="">70 </td>
                    <td nowrap="">20 <font color="red"><b>(7)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">18</td>
                </tr>
                <tr align="left">
                    <td nowrap="" style="padding: 1px;" colspan="7"> </td>
                </tr>
                <tr align="left">
                    <td nowrap="">Demand</td>
                    <td nowrap="">5</td>
                    <td nowrap="">8</td>
                    <td nowrap="">7</td>
                    <td nowrap="">14</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap=""></td>
                </tr>
            </tbody>
        </table>
    </span>
</div>
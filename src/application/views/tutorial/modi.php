<div class="container py-3">
    <span id="ContentPlaceHolder1_lblExampleTitle" class="ExampleTitle">
        <h1>MODI <small>(Modified Distribution)</small></h1>
        <hr>
        <h3>1. Algorithm &amp; Example-1</h3>
    </span>
    <span id="ContentPlaceHolder1_lblExample">
        <br><br><b>Algorithm</b><br>
        <table class="tableExaAlgo">
            <tbody>
                <tr>
                    <td colspan="2">
                        <b>MODI Method Steps (Rule)</b>
                    </td>
                </tr>
                <tr>
                    <td align="right" nowrap="" valign="top">
                        Step-1:
                    </td>
                    <td>
                        Find an initial basic feasible solution using any one of the three methods NWCM, LCM or VAM.
                    </td>
                </tr>
                <tr>
                    <td align="right" nowrap="" valign="top">
                        Step-2:
                    </td>
                    <td>
                        Find <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-1-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1"><span class="MJXp-mstyle" id="MJXp-Span-2"><span class="MJXp-msub" id="MJXp-Span-3"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-4" style="margin-right: 0.05em;">u</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-5" style="vertical-align: -0.4em;">i</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-1">u_i</script> and <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-2-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-6"><span class="MJXp-mstyle" id="MJXp-Span-7"><span class="MJXp-msub" id="MJXp-Span-8"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-9" style="margin-right: 0.05em;">v</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-10" style="vertical-align: -0.4em;">j</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-2">v_j</script> for rows and columns. To start
                        <br><br>a. assign 0 to <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-3-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-11"><span class="MJXp-mstyle" id="MJXp-Span-12"><span class="MJXp-msub" id="MJXp-Span-13"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-14" style="margin-right: 0.05em;">u</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-15" style="vertical-align: -0.4em;">i</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-3">u_i</script> or <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-4-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-16"><span class="MJXp-mstyle" id="MJXp-Span-17"><span class="MJXp-msub" id="MJXp-Span-18"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-19" style="margin-right: 0.05em;">v</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-20" style="vertical-align: -0.4em;">j</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-4">v_j</script> where maximum number of allocation in a row or column respectively.
                        <br><br>b. Calculate other <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-5-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-21"><span class="MJXp-mstyle" id="MJXp-Span-22"><span class="MJXp-msub" id="MJXp-Span-23"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-24" style="margin-right: 0.05em;">u</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-25" style="vertical-align: -0.4em;">i</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-5">u_i</script>'s and <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-6-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-26"><span class="MJXp-mstyle" id="MJXp-Span-27"><span class="MJXp-msub" id="MJXp-Span-28"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-29" style="margin-right: 0.05em;">v</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-30" style="vertical-align: -0.4em;">j</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-6">v_j</script>'s using <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-7-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-31"><span class="MJXp-mstyle" id="MJXp-Span-32"><span class="MJXp-msub" id="MJXp-Span-33"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-34" style="margin-right: 0.05em;">c</span><span class="MJXp-mrow MJXp-script" id="MJXp-Span-35" style="vertical-align: -0.4em;"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-36">i</span><span class="MJXp-mi MJXp-italic" id="MJXp-Span-37">j</span></span></span><span class="MJXp-mo" id="MJXp-Span-38" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-39"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-40" style="margin-right: 0.05em;">u</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-41" style="vertical-align: -0.4em;">i</span></span><span class="MJXp-mo" id="MJXp-Span-42" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-msub" id="MJXp-Span-43"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-44" style="margin-right: 0.05em;">v</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-45" style="vertical-align: -0.4em;">j</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-7">c_(ij) = u_i + v_j</script>, for all occupied cells.
                    </td>
                </tr>
                <tr>
                    <td align="right" nowrap="" valign="top">
                        Step-3:
                    </td>
                    <td>
                        For all unoccupied cells, calculate <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-8-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-46"><span class="MJXp-mstyle" id="MJXp-Span-47"><span class="MJXp-msub" id="MJXp-Span-48"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-49" style="margin-right: 0.05em;">d</span><span class="MJXp-mrow MJXp-script" id="MJXp-Span-50" style="vertical-align: -0.4em;"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-51">i</span><span class="MJXp-mi MJXp-italic" id="MJXp-Span-52">j</span></span></span><span class="MJXp-mo" id="MJXp-Span-53" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-54"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-55" style="margin-right: 0.05em;">c</span><span class="MJXp-mrow MJXp-script" id="MJXp-Span-56" style="vertical-align: -0.4em;"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-57">i</span><span class="MJXp-mi MJXp-italic" id="MJXp-Span-58">j</span></span></span><span class="MJXp-mo" id="MJXp-Span-59" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mrow" id="MJXp-Span-60"><span class="MJXp-mo" id="MJXp-Span-61" style="margin-left: 0em; margin-right: 0em; vertical-align: -0.244em;"><span class="MJXp-right MJXp-scale7" style="font-size: 1.978em; margin-left: -0.05em;">(</span></span><span class="MJXp-msub" id="MJXp-Span-62"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-63" style="margin-right: 0.05em;">u</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-64" style="vertical-align: -0.4em;">i</span></span><span class="MJXp-mo" id="MJXp-Span-65" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-msub" id="MJXp-Span-66"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-67" style="margin-right: 0.05em;">v</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-68" style="vertical-align: -0.4em;">j</span></span><span class="MJXp-mo" id="MJXp-Span-69" style="margin-left: 0em; margin-right: 0em; vertical-align: -0.244em;"><span class="MJXp-right MJXp-scale7" style="font-size: 1.978em; margin-left: -0.05em;">)</span></span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-8">d_(ij) = c_(ij) - (u_i + v_j)</script>, .
                    </td>
                </tr>
                <tr>
                    <td align="right" nowrap="" valign="top">
                        Step-4:
                    </td>
                    <td>Check the sign of <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-9-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-70"><span class="MJXp-mstyle" id="MJXp-Span-71"><span class="MJXp-msub" id="MJXp-Span-72"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-73" style="margin-right: 0.05em;">d</span><span class="MJXp-mrow MJXp-script" id="MJXp-Span-74" style="vertical-align: -0.4em;"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-75">i</span><span class="MJXp-mi MJXp-italic" id="MJXp-Span-76">j</span></span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-9">d_(ij)</script>
                        <br><br>a. If <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-10-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-77"><span class="MJXp-mstyle" id="MJXp-Span-78"><span class="MJXp-msub" id="MJXp-Span-79"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-80" style="margin-right: 0.05em;">d</span><span class="MJXp-mrow MJXp-script" id="MJXp-Span-81" style="vertical-align: -0.4em;"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-82">i</span><span class="MJXp-mi MJXp-italic" id="MJXp-Span-83">j</span></span></span><span class="MJXp-mo" id="MJXp-Span-84" style="margin-left: 0.333em; margin-right: 0.333em;">&gt;</span><span class="MJXp-mn" id="MJXp-Span-85">0</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-10">d_(ij) > 0</script>, then current basic feasible solution is optimal and stop this procedure.
                        <br><br>b. If <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-11-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-86"><span class="MJXp-mstyle" id="MJXp-Span-87"><span class="MJXp-msub" id="MJXp-Span-88"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-89" style="margin-right: 0.05em;">d</span><span class="MJXp-mrow MJXp-script" id="MJXp-Span-90" style="vertical-align: -0.4em;"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-91">i</span><span class="MJXp-mi MJXp-italic" id="MJXp-Span-92">j</span></span></span><span class="MJXp-mo" id="MJXp-Span-93" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-94">0</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-11">d_(ij)=0</script> then alternative soluion exists, with different set allocation and same transportation cost. Now stop this procedure.
                        <br><br>b. If <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-12-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-95"><span class="MJXp-mstyle" id="MJXp-Span-96"><span class="MJXp-msub" id="MJXp-Span-97"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-98" style="margin-right: 0.05em;">d</span><span class="MJXp-mrow MJXp-script" id="MJXp-Span-99" style="vertical-align: -0.4em;"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-100">i</span><span class="MJXp-mi MJXp-italic" id="MJXp-Span-101">j</span></span></span><span class="MJXp-mo" id="MJXp-Span-102" style="margin-left: 0.333em; margin-right: 0.333em;">&lt;</span><span class="MJXp-mn" id="MJXp-Span-103">0</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-12">d_(ij) < 0</script>, then the given solution is not an optimal solution and further improvement in the solution is possible.
                    </td>
                </tr>
                <tr>
                    <td align="right" nowrap="" valign="top">
                        Step-5:
                    </td>
                    <td>
                        Select the unoccupied cell with the largest negative value of <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-13-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-104"><span class="MJXp-mstyle" id="MJXp-Span-105"><span class="MJXp-msub" id="MJXp-Span-106"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-107" style="margin-right: 0.05em;">d</span><span class="MJXp-mrow MJXp-script" id="MJXp-Span-108" style="vertical-align: -0.4em;"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-109">i</span><span class="MJXp-mi MJXp-italic" id="MJXp-Span-110">j</span></span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-13">d_(ij)</script>, and included in the next solution.
                    </td>
                </tr>
                <tr>
                    <td align="right" nowrap="" valign="top">
                        Step-6:
                    </td>
                    <td>
                        Draw a closed path (or loop) from the unoccupied cell (selected in the previous step). The right angle turn in this path is allowed only at occupied cells and at the original unoccupied cell. Mark (+) and (-) sign alternatively at each corner, starting from the original unoccupied cell.
                    </td>
                </tr>
                <tr>
                    <td align="right" nowrap="" valign="top">
                        Step-7:
                    </td>
                    <td>
                        1. Select the minimum value from cells marked with (-) sign of the closed path.
                        <br><br>2. Assign this value to selected unoccupied cell (So unoccupied cell becomes occupied cell).
                        <br><br>3. Add this value to the other occupied cells marked with (+) sign.
                        <br><br>4. Subtract this value to the other occupied cells marked with (-) sign.
                    </td>
                </tr>
                <tr>
                    <td align="right" nowrap="" valign="top">
                        Step-8:
                    </td>
                    <td>
                        Repeat Step-2 to step-7 until optimal solution is obtained. This procedure stops when all <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-14-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-111"><span class="MJXp-mstyle" id="MJXp-Span-112"><span class="MJXp-msub" id="MJXp-Span-113"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-114" style="margin-right: 0.05em;">d</span><span class="MJXp-mrow MJXp-script" id="MJXp-Span-115" style="vertical-align: -0.4em;"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-116">i</span><span class="MJXp-mi MJXp-italic" id="MJXp-Span-117">j</span></span></span><span class="MJXp-mo" id="MJXp-Span-118" style="margin-left: 0.333em; margin-right: 0.333em;">≥</span><span class="MJXp-mn" id="MJXp-Span-119">0</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-14">d_(ij) >= 0</script> for unoccupied cells.
                    </td>
                </tr>
            </tbody>
        </table>
        <hr><b>Example-1</b><br>
        <b>Find Solution using Voggel's Approximation method, also find optimal solution using modi method, <br>
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
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-15-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-120"><span class="MJXp-mstyle" id="MJXp-Span-121"><span class="MJXp-msub" id="MJXp-Span-122"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-123" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-124" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-15">D_1</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-16-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-125"><span class="MJXp-mstyle" id="MJXp-Span-126"><span class="MJXp-msub" id="MJXp-Span-127"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-128" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-129" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-16">D_2</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-17-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-130"><span class="MJXp-mstyle" id="MJXp-Span-131"><span class="MJXp-msub" id="MJXp-Span-132"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-133" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-134" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-17">D_3</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-18-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-135"><span class="MJXp-mstyle" id="MJXp-Span-136"><span class="MJXp-msub" id="MJXp-Span-137"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-138" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-139" style="vertical-align: -0.4em;">4</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-18">D_4</script>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">Supply</td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-19-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-140"><span class="MJXp-mstyle" id="MJXp-Span-141"><span class="MJXp-msub" id="MJXp-Span-142"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-143" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-144" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-19">S_1</script>
                    </td>
                    <td nowrap="">19</td>
                    <td nowrap="">30</td>
                    <td nowrap="">50</td>
                    <td nowrap="">10</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">7</td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-20-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-145"><span class="MJXp-mstyle" id="MJXp-Span-146"><span class="MJXp-msub" id="MJXp-Span-147"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-148" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-149" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-20">S_2</script>
                    </td>
                    <td nowrap="">70</td>
                    <td nowrap="">30</td>
                    <td nowrap="">40</td>
                    <td nowrap="">60</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">9</td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-21-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-150"><span class="MJXp-mstyle" id="MJXp-Span-151"><span class="MJXp-msub" id="MJXp-Span-152"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-153" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-154" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-21">S_3</script>
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
        </table><br><br>Table-1<br>
        <table border="1" cellspacing="0" cellpadding="6" style="border-collapse:collapse;">
            <tbody>
                <tr align="center">
                    <td nowrap=""> </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-22-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-155"><span class="MJXp-mstyle" id="MJXp-Span-156"><span class="MJXp-msub" id="MJXp-Span-157"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-158" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-159" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-22">D_1</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-23-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-160"><span class="MJXp-mstyle" id="MJXp-Span-161"><span class="MJXp-msub" id="MJXp-Span-162"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-163" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-164" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-23">D_2</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-24-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-165"><span class="MJXp-mstyle" id="MJXp-Span-166"><span class="MJXp-msub" id="MJXp-Span-167"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-168" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-169" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-24">D_3</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-25-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-170"><span class="MJXp-mstyle" id="MJXp-Span-171"><span class="MJXp-msub" id="MJXp-Span-172"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-173" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-174" style="vertical-align: -0.4em;">4</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-25">D_4</script>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">Supply</td>
                    <td nowrap="">Row Penalty</td>
                </tr>
                <tr align="center">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-26-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-175"><span class="MJXp-mstyle" id="MJXp-Span-176"><span class="MJXp-msub" id="MJXp-Span-177"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-178" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-179" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-26">S_1</script>
                    </td>
                    <td nowrap="">19</td>
                    <td nowrap="">30</td>
                    <td nowrap="">50</td>
                    <td nowrap="">10</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">7</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-27-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-180"><span class="MJXp-mstyle" id="MJXp-Span-181"><span class="MJXp-mn" id="MJXp-Span-182">9</span><span class="MJXp-mo" id="MJXp-Span-183" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-184">19</span><span class="MJXp-mo" id="MJXp-Span-185" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-186">10</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-27">9=19-10</script>
                    </td>
                </tr>
                <tr align="center">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-28-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-187"><span class="MJXp-mstyle" id="MJXp-Span-188"><span class="MJXp-msub" id="MJXp-Span-189"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-190" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-191" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-28">S_2</script>
                    </td>
                    <td nowrap="">70</td>
                    <td nowrap="">30</td>
                    <td nowrap="">40</td>
                    <td nowrap="">60</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">9</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-29-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-192"><span class="MJXp-mstyle" id="MJXp-Span-193"><span class="MJXp-mn" id="MJXp-Span-194">10</span><span class="MJXp-mo" id="MJXp-Span-195" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-196">40</span><span class="MJXp-mo" id="MJXp-Span-197" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-198">30</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-29">10=40-30</script>
                    </td>
                </tr>
                <tr align="center">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-30-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-199"><span class="MJXp-mstyle" id="MJXp-Span-200"><span class="MJXp-msub" id="MJXp-Span-201"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-202" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-203" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-30">S_3</script>
                    </td>
                    <td nowrap="">40</td>
                    <td nowrap="">8</td>
                    <td nowrap="">70</td>
                    <td nowrap="">20</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">18</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-31-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-204"><span class="MJXp-mstyle" id="MJXp-Span-205"><span class="MJXp-mn" id="MJXp-Span-206">12</span><span class="MJXp-mo" id="MJXp-Span-207" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-208">20</span><span class="MJXp-mo" id="MJXp-Span-209" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-210">8</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-31">12=20-8</script>
                    </td>
                </tr>
                <tr align="center">
                    <td nowrap="" style="padding: 1px;" colspan="8"> </td>
                </tr>
                <tr align="center">
                    <td nowrap="">Demand</td>
                    <td nowrap="">5</td>
                    <td nowrap="">8</td>
                    <td nowrap="">7</td>
                    <td nowrap="">14</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap=""></td>
                    <td nowrap=""></td>
                </tr>
                <tr align="center">
                    <td nowrap="">Column<br>Penalty</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-32-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-211"><span class="MJXp-mstyle" id="MJXp-Span-212"><span class="MJXp-mn" id="MJXp-Span-213">21</span><span class="MJXp-mo" id="MJXp-Span-214" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-215">40</span><span class="MJXp-mo" id="MJXp-Span-216" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-217">19</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-32">21=40-19</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-33-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-218"><span class="MJXp-mstyle" id="MJXp-Span-219"><span class="MJXp-mn" id="MJXp-Span-220">22</span><span class="MJXp-mo" id="MJXp-Span-221" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-222">30</span><span class="MJXp-mo" id="MJXp-Span-223" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-224">8</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-33">22=30-8</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-34-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-225"><span class="MJXp-mstyle" id="MJXp-Span-226"><span class="MJXp-mn" id="MJXp-Span-227">10</span><span class="MJXp-mo" id="MJXp-Span-228" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-229">50</span><span class="MJXp-mo" id="MJXp-Span-230" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-231">40</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-34">10=50-40</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-35-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-232"><span class="MJXp-mstyle" id="MJXp-Span-233"><span class="MJXp-mn" id="MJXp-Span-234">10</span><span class="MJXp-mo" id="MJXp-Span-235" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-236">20</span><span class="MJXp-mo" id="MJXp-Span-237" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-238">10</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-35">10=20-10</script>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap=""></td>
                    <td nowrap=""></td>
                </tr>
            </tbody>
        </table><br><br>The maximum penalty, 22, occurs in column <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-36-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-239"><span class="MJXp-mstyle" id="MJXp-Span-240"><span class="MJXp-msub" id="MJXp-Span-241"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-242" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-243" style="vertical-align: -0.4em;">2</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-36">D_2</script>. <br><br>The minimum <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-37-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-244"><span class="MJXp-mstyle" id="MJXp-Span-245"><span class="MJXp-msub" id="MJXp-Span-246"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-247" style="margin-right: 0.05em;">c</span><span class="MJXp-mrow MJXp-script" id="MJXp-Span-248" style="vertical-align: -0.4em;"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-249">i</span><span class="MJXp-mi MJXp-italic" id="MJXp-Span-250">j</span></span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-37">c_(ij)</script> in this column is <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-38-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-251"><span class="MJXp-mstyle" id="MJXp-Span-252"><span class="MJXp-msub" id="MJXp-Span-253"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-254" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-255" style="vertical-align: -0.4em;">32</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-38">c_32</script> = 8.<br><br>The maximum allocation in this cell is min(18,8) = <font color="red"><b>8</b></font>.<br>It satisfy demand of <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-39-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-256"><span class="MJXp-mstyle" id="MJXp-Span-257"><span class="MJXp-msub" id="MJXp-Span-258"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-259" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-260" style="vertical-align: -0.4em;">2</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-39">D_2</script> and adjust the supply of <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-40-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-261"><span class="MJXp-mstyle" id="MJXp-Span-262"><span class="MJXp-msub" id="MJXp-Span-263"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-264" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-265" style="vertical-align: -0.4em;">3</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-40">S_3</script> from 18 to 10 (18 - 8 = 10). <br><br>Table-2<br>
        <table border="1" cellspacing="0" cellpadding="6" style="border-collapse:collapse;">
            <tbody>
                <tr align="center">
                    <td nowrap=""> </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-41-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-266"><span class="MJXp-mstyle" id="MJXp-Span-267"><span class="MJXp-msub" id="MJXp-Span-268"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-269" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-270" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-41">D_1</script>
                    </td>
                    <td nowrap="" class="vStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-42-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-271"><span class="MJXp-mstyle" id="MJXp-Span-272"><span class="MJXp-msub" id="MJXp-Span-273"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-274" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-275" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-42">D_2</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-43-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-276"><span class="MJXp-mstyle" id="MJXp-Span-277"><span class="MJXp-msub" id="MJXp-Span-278"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-279" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-280" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-43">D_3</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-44-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-281"><span class="MJXp-mstyle" id="MJXp-Span-282"><span class="MJXp-msub" id="MJXp-Span-283"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-284" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-285" style="vertical-align: -0.4em;">4</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-44">D_4</script>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">Supply</td>
                    <td nowrap="">Row Penalty</td>
                </tr>
                <tr align="center">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-45-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-286"><span class="MJXp-mstyle" id="MJXp-Span-287"><span class="MJXp-msub" id="MJXp-Span-288"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-289" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-290" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-45">S_1</script>
                    </td>
                    <td nowrap="">19</td>
                    <td nowrap="" class="vStrike ">30</td>
                    <td nowrap="">50</td>
                    <td nowrap="">10</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">7</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-46-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-291"><span class="MJXp-mstyle" id="MJXp-Span-292"><span class="MJXp-mn" id="MJXp-Span-293">9</span><span class="MJXp-mo" id="MJXp-Span-294" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-295">19</span><span class="MJXp-mo" id="MJXp-Span-296" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-297">10</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-46">9=19-10</script>
                    </td>
                </tr>
                <tr align="center">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-47-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-298"><span class="MJXp-mstyle" id="MJXp-Span-299"><span class="MJXp-msub" id="MJXp-Span-300"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-301" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-302" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-47">S_2</script>
                    </td>
                    <td nowrap="">70</td>
                    <td nowrap="" class="vStrike ">30</td>
                    <td nowrap="">40</td>
                    <td nowrap="">60</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">9</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-48-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-303"><span class="MJXp-mstyle" id="MJXp-Span-304"><span class="MJXp-mn" id="MJXp-Span-305">20</span><span class="MJXp-mo" id="MJXp-Span-306" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-307">60</span><span class="MJXp-mo" id="MJXp-Span-308" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-309">40</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-48">20=60-40</script>
                    </td>
                </tr>
                <tr align="center">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-49-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-310"><span class="MJXp-mstyle" id="MJXp-Span-311"><span class="MJXp-msub" id="MJXp-Span-312"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-313" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-314" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-49">S_3</script>
                    </td>
                    <td nowrap="">40</td>
                    <td nowrap="" class="vStrike ">8<font color="red"><b>(8)</b></font>
                    </td>
                    <td nowrap="">70</td>
                    <td nowrap="">20</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">10</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-50-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-315"><span class="MJXp-mstyle" id="MJXp-Span-316"><span class="MJXp-mn" id="MJXp-Span-317">20</span><span class="MJXp-mo" id="MJXp-Span-318" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-319">40</span><span class="MJXp-mo" id="MJXp-Span-320" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-321">20</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-50">20=40-20</script>
                    </td>
                </tr>
                <tr align="center">
                    <td nowrap="" style="padding: 1px;" colspan="8"> </td>
                </tr>
                <tr align="center">
                    <td nowrap="">Demand</td>
                    <td nowrap="">5</td>
                    <td nowrap="">0</td>
                    <td nowrap="">7</td>
                    <td nowrap="">14</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap=""></td>
                    <td nowrap=""></td>
                </tr>
                <tr align="center">
                    <td nowrap="">Column<br>Penalty</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-51-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-322"><span class="MJXp-mstyle" id="MJXp-Span-323"><span class="MJXp-mn" id="MJXp-Span-324">21</span><span class="MJXp-mo" id="MJXp-Span-325" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-326">40</span><span class="MJXp-mo" id="MJXp-Span-327" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-328">19</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-51">21=40-19</script>
                    </td>
                    <td nowrap="">--</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-52-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-329"><span class="MJXp-mstyle" id="MJXp-Span-330"><span class="MJXp-mn" id="MJXp-Span-331">10</span><span class="MJXp-mo" id="MJXp-Span-332" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-333">50</span><span class="MJXp-mo" id="MJXp-Span-334" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-335">40</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-52">10=50-40</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-53-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-336"><span class="MJXp-mstyle" id="MJXp-Span-337"><span class="MJXp-mn" id="MJXp-Span-338">10</span><span class="MJXp-mo" id="MJXp-Span-339" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-340">20</span><span class="MJXp-mo" id="MJXp-Span-341" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-342">10</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-53">10=20-10</script>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap=""></td>
                    <td nowrap=""></td>
                </tr>
            </tbody>
        </table><br><br>The maximum penalty, 21, occurs in column <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-54-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-343"><span class="MJXp-mstyle" id="MJXp-Span-344"><span class="MJXp-msub" id="MJXp-Span-345"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-346" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-347" style="vertical-align: -0.4em;">1</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-54">D_1</script>. <br><br>The minimum <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-55-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-348"><span class="MJXp-mstyle" id="MJXp-Span-349"><span class="MJXp-msub" id="MJXp-Span-350"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-351" style="margin-right: 0.05em;">c</span><span class="MJXp-mrow MJXp-script" id="MJXp-Span-352" style="vertical-align: -0.4em;"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-353">i</span><span class="MJXp-mi MJXp-italic" id="MJXp-Span-354">j</span></span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-55">c_(ij)</script> in this column is <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-56-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-355"><span class="MJXp-mstyle" id="MJXp-Span-356"><span class="MJXp-msub" id="MJXp-Span-357"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-358" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-359" style="vertical-align: -0.4em;">11</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-56">c_11</script> = 19.<br><br>The maximum allocation in this cell is min(7,5) = <font color="red"><b>5</b></font>.<br>It satisfy demand of <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-57-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-360"><span class="MJXp-mstyle" id="MJXp-Span-361"><span class="MJXp-msub" id="MJXp-Span-362"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-363" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-364" style="vertical-align: -0.4em;">1</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-57">D_1</script> and adjust the supply of <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-58-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-365"><span class="MJXp-mstyle" id="MJXp-Span-366"><span class="MJXp-msub" id="MJXp-Span-367"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-368" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-369" style="vertical-align: -0.4em;">1</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-58">S_1</script> from 7 to 2 (7 - 5 = 2). <br><br>Table-3<br>
        <table border="1" cellspacing="0" cellpadding="6" style="border-collapse:collapse;">
            <tbody>
                <tr align="center">
                    <td nowrap=""> </td>
                    <td nowrap="" class="vStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-59-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-370"><span class="MJXp-mstyle" id="MJXp-Span-371"><span class="MJXp-msub" id="MJXp-Span-372"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-373" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-374" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-59">D_1</script>
                    </td>
                    <td nowrap="" class="vStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-60-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-375"><span class="MJXp-mstyle" id="MJXp-Span-376"><span class="MJXp-msub" id="MJXp-Span-377"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-378" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-379" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-60">D_2</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-61-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-380"><span class="MJXp-mstyle" id="MJXp-Span-381"><span class="MJXp-msub" id="MJXp-Span-382"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-383" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-384" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-61">D_3</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-62-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-385"><span class="MJXp-mstyle" id="MJXp-Span-386"><span class="MJXp-msub" id="MJXp-Span-387"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-388" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-389" style="vertical-align: -0.4em;">4</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-62">D_4</script>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">Supply</td>
                    <td nowrap="">Row Penalty</td>
                </tr>
                <tr align="center">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-63-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-390"><span class="MJXp-mstyle" id="MJXp-Span-391"><span class="MJXp-msub" id="MJXp-Span-392"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-393" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-394" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-63">S_1</script>
                    </td>
                    <td nowrap="" class="vStrike ">19<font color="red"><b>(5)</b></font>
                    </td>
                    <td nowrap="" class="vStrike ">30</td>
                    <td nowrap="">50</td>
                    <td nowrap="">10</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">2</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-64-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-395"><span class="MJXp-mstyle" id="MJXp-Span-396"><span class="MJXp-mn" id="MJXp-Span-397">40</span><span class="MJXp-mo" id="MJXp-Span-398" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-399">50</span><span class="MJXp-mo" id="MJXp-Span-400" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-401">10</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-64">40=50-10</script>
                    </td>
                </tr>
                <tr align="center">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-65-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-402"><span class="MJXp-mstyle" id="MJXp-Span-403"><span class="MJXp-msub" id="MJXp-Span-404"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-405" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-406" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-65">S_2</script>
                    </td>
                    <td nowrap="" class="vStrike ">70</td>
                    <td nowrap="" class="vStrike ">30</td>
                    <td nowrap="">40</td>
                    <td nowrap="">60</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">9</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-66-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-407"><span class="MJXp-mstyle" id="MJXp-Span-408"><span class="MJXp-mn" id="MJXp-Span-409">20</span><span class="MJXp-mo" id="MJXp-Span-410" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-411">60</span><span class="MJXp-mo" id="MJXp-Span-412" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-413">40</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-66">20=60-40</script>
                    </td>
                </tr>
                <tr align="center">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-67-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-414"><span class="MJXp-mstyle" id="MJXp-Span-415"><span class="MJXp-msub" id="MJXp-Span-416"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-417" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-418" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-67">S_3</script>
                    </td>
                    <td nowrap="" class="vStrike ">40</td>
                    <td nowrap="" class="vStrike ">8<font color="red"><b>(8)</b></font>
                    </td>
                    <td nowrap="">70</td>
                    <td nowrap="">20</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">10</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-68-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-419"><span class="MJXp-mstyle" id="MJXp-Span-420"><span class="MJXp-mn" id="MJXp-Span-421">50</span><span class="MJXp-mo" id="MJXp-Span-422" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-423">70</span><span class="MJXp-mo" id="MJXp-Span-424" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-425">20</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-68">50=70-20</script>
                    </td>
                </tr>
                <tr align="center">
                    <td nowrap="" style="padding: 1px;" colspan="8"> </td>
                </tr>
                <tr align="center">
                    <td nowrap="">Demand</td>
                    <td nowrap="">0</td>
                    <td nowrap="">0</td>
                    <td nowrap="">7</td>
                    <td nowrap="">14</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap=""></td>
                    <td nowrap=""></td>
                </tr>
                <tr align="center">
                    <td nowrap="">Column<br>Penalty</td>
                    <td nowrap="">--</td>
                    <td nowrap="">--</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-69-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-426"><span class="MJXp-mstyle" id="MJXp-Span-427"><span class="MJXp-mn" id="MJXp-Span-428">10</span><span class="MJXp-mo" id="MJXp-Span-429" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-430">50</span><span class="MJXp-mo" id="MJXp-Span-431" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-432">40</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-69">10=50-40</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-70-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-433"><span class="MJXp-mstyle" id="MJXp-Span-434"><span class="MJXp-mn" id="MJXp-Span-435">10</span><span class="MJXp-mo" id="MJXp-Span-436" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-437">20</span><span class="MJXp-mo" id="MJXp-Span-438" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-439">10</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-70">10=20-10</script>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap=""></td>
                    <td nowrap=""></td>
                </tr>
            </tbody>
        </table><br><br>The maximum penalty, 50, occurs in row <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-71-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-440"><span class="MJXp-mstyle" id="MJXp-Span-441"><span class="MJXp-msub" id="MJXp-Span-442"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-443" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-444" style="vertical-align: -0.4em;">3</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-71">S_3</script>. <br><br>The minimum <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-72-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-445"><span class="MJXp-mstyle" id="MJXp-Span-446"><span class="MJXp-msub" id="MJXp-Span-447"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-448" style="margin-right: 0.05em;">c</span><span class="MJXp-mrow MJXp-script" id="MJXp-Span-449" style="vertical-align: -0.4em;"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-450">i</span><span class="MJXp-mi MJXp-italic" id="MJXp-Span-451">j</span></span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-72">c_(ij)</script> in this row is <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-73-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-452"><span class="MJXp-mstyle" id="MJXp-Span-453"><span class="MJXp-msub" id="MJXp-Span-454"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-455" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-456" style="vertical-align: -0.4em;">34</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-73">c_34</script> = 20.<br><br>The maximum allocation in this cell is min(10,14) = <font color="red"><b>10</b></font>.<br>It satisfy supply of <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-74-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-457"><span class="MJXp-mstyle" id="MJXp-Span-458"><span class="MJXp-msub" id="MJXp-Span-459"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-460" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-461" style="vertical-align: -0.4em;">3</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-74">S_3</script> and adjust the demand of <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-75-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-462"><span class="MJXp-mstyle" id="MJXp-Span-463"><span class="MJXp-msub" id="MJXp-Span-464"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-465" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-466" style="vertical-align: -0.4em;">4</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-75">D_4</script> from 14 to 4 (14 - 10 = 4). <br><br>Table-4<br>
        <table border="1" cellspacing="0" cellpadding="6" style="border-collapse:collapse;">
            <tbody>
                <tr align="center">
                    <td nowrap=""> </td>
                    <td nowrap="" class="vStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-76-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-467"><span class="MJXp-mstyle" id="MJXp-Span-468"><span class="MJXp-msub" id="MJXp-Span-469"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-470" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-471" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-76">D_1</script>
                    </td>
                    <td nowrap="" class="vStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-77-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-472"><span class="MJXp-mstyle" id="MJXp-Span-473"><span class="MJXp-msub" id="MJXp-Span-474"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-475" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-476" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-77">D_2</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-78-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-477"><span class="MJXp-mstyle" id="MJXp-Span-478"><span class="MJXp-msub" id="MJXp-Span-479"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-480" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-481" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-78">D_3</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-79-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-482"><span class="MJXp-mstyle" id="MJXp-Span-483"><span class="MJXp-msub" id="MJXp-Span-484"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-485" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-486" style="vertical-align: -0.4em;">4</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-79">D_4</script>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">Supply</td>
                    <td nowrap="">Row Penalty</td>
                </tr>
                <tr align="center">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-80-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-487"><span class="MJXp-mstyle" id="MJXp-Span-488"><span class="MJXp-msub" id="MJXp-Span-489"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-490" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-491" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-80">S_1</script>
                    </td>
                    <td nowrap="" class="vStrike ">19<font color="red"><b>(5)</b></font>
                    </td>
                    <td nowrap="" class="vStrike ">30</td>
                    <td nowrap="">50</td>
                    <td nowrap="">10</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">2</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-81-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-492"><span class="MJXp-mstyle" id="MJXp-Span-493"><span class="MJXp-mn" id="MJXp-Span-494">40</span><span class="MJXp-mo" id="MJXp-Span-495" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-496">50</span><span class="MJXp-mo" id="MJXp-Span-497" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-498">10</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-81">40=50-10</script>
                    </td>
                </tr>
                <tr align="center">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-82-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-499"><span class="MJXp-mstyle" id="MJXp-Span-500"><span class="MJXp-msub" id="MJXp-Span-501"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-502" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-503" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-82">S_2</script>
                    </td>
                    <td nowrap="" class="vStrike ">70</td>
                    <td nowrap="" class="vStrike ">30</td>
                    <td nowrap="">40</td>
                    <td nowrap="">60</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">9</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-83-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-504"><span class="MJXp-mstyle" id="MJXp-Span-505"><span class="MJXp-mn" id="MJXp-Span-506">20</span><span class="MJXp-mo" id="MJXp-Span-507" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-508">60</span><span class="MJXp-mo" id="MJXp-Span-509" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-510">40</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-83">20=60-40</script>
                    </td>
                </tr>
                <tr align="center">
                    <td nowrap="" class="hStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-84-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-511"><span class="MJXp-mstyle" id="MJXp-Span-512"><span class="MJXp-msub" id="MJXp-Span-513"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-514" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-515" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-84">S_3</script>
                    </td>
                    <td nowrap="" class="hStrike vStrike ">40</td>
                    <td nowrap="" class="hStrike vStrike ">8<font color="red"><b>(8)</b></font>
                    </td>
                    <td nowrap="" class="hStrike ">70</td>
                    <td nowrap="" class="hStrike ">20<font color="red"><b>(10)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">0</td>
                    <td nowrap="">--</td>
                </tr>
                <tr align="center">
                    <td nowrap="" style="padding: 1px;" colspan="8"> </td>
                </tr>
                <tr align="center">
                    <td nowrap="">Demand</td>
                    <td nowrap="">0</td>
                    <td nowrap="">0</td>
                    <td nowrap="">7</td>
                    <td nowrap="">4</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap=""></td>
                    <td nowrap=""></td>
                </tr>
                <tr align="center">
                    <td nowrap="">Column<br>Penalty</td>
                    <td nowrap="">--</td>
                    <td nowrap="">--</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-85-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-516"><span class="MJXp-mstyle" id="MJXp-Span-517"><span class="MJXp-mn" id="MJXp-Span-518">10</span><span class="MJXp-mo" id="MJXp-Span-519" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-520">50</span><span class="MJXp-mo" id="MJXp-Span-521" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-522">40</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-85">10=50-40</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-86-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-523"><span class="MJXp-mstyle" id="MJXp-Span-524"><span class="MJXp-mn" id="MJXp-Span-525">50</span><span class="MJXp-mo" id="MJXp-Span-526" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-527">60</span><span class="MJXp-mo" id="MJXp-Span-528" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-529">10</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-86">50=60-10</script>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap=""></td>
                    <td nowrap=""></td>
                </tr>
            </tbody>
        </table><br><br>The maximum penalty, 50, occurs in column <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-87-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-530"><span class="MJXp-mstyle" id="MJXp-Span-531"><span class="MJXp-msub" id="MJXp-Span-532"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-533" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-534" style="vertical-align: -0.4em;">4</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-87">D_4</script>. <br><br>The minimum <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-88-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-535"><span class="MJXp-mstyle" id="MJXp-Span-536"><span class="MJXp-msub" id="MJXp-Span-537"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-538" style="margin-right: 0.05em;">c</span><span class="MJXp-mrow MJXp-script" id="MJXp-Span-539" style="vertical-align: -0.4em;"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-540">i</span><span class="MJXp-mi MJXp-italic" id="MJXp-Span-541">j</span></span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-88">c_(ij)</script> in this column is <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-89-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-542"><span class="MJXp-mstyle" id="MJXp-Span-543"><span class="MJXp-msub" id="MJXp-Span-544"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-545" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-546" style="vertical-align: -0.4em;">14</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-89">c_14</script> = 10.<br><br>The maximum allocation in this cell is min(2,4) = <font color="red"><b>2</b></font>.<br>It satisfy supply of <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-90-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-547"><span class="MJXp-mstyle" id="MJXp-Span-548"><span class="MJXp-msub" id="MJXp-Span-549"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-550" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-551" style="vertical-align: -0.4em;">1</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-90">S_1</script> and adjust the demand of <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-91-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-552"><span class="MJXp-mstyle" id="MJXp-Span-553"><span class="MJXp-msub" id="MJXp-Span-554"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-555" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-556" style="vertical-align: -0.4em;">4</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-91">D_4</script> from 4 to 2 (4 - 2 = 2). <br><br>Table-5<br>
        <table border="1" cellspacing="0" cellpadding="6" style="border-collapse:collapse;">
            <tbody>
                <tr align="center">
                    <td nowrap=""> </td>
                    <td nowrap="" class="vStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-92-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-557"><span class="MJXp-mstyle" id="MJXp-Span-558"><span class="MJXp-msub" id="MJXp-Span-559"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-560" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-561" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-92">D_1</script>
                    </td>
                    <td nowrap="" class="vStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-93-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-562"><span class="MJXp-mstyle" id="MJXp-Span-563"><span class="MJXp-msub" id="MJXp-Span-564"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-565" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-566" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-93">D_2</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-94-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-567"><span class="MJXp-mstyle" id="MJXp-Span-568"><span class="MJXp-msub" id="MJXp-Span-569"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-570" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-571" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-94">D_3</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-95-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-572"><span class="MJXp-mstyle" id="MJXp-Span-573"><span class="MJXp-msub" id="MJXp-Span-574"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-575" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-576" style="vertical-align: -0.4em;">4</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-95">D_4</script>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">Supply</td>
                    <td nowrap="">Row Penalty</td>
                </tr>
                <tr align="center">
                    <td nowrap="" class="hStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-96-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-577"><span class="MJXp-mstyle" id="MJXp-Span-578"><span class="MJXp-msub" id="MJXp-Span-579"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-580" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-581" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-96">S_1</script>
                    </td>
                    <td nowrap="" class="hStrike vStrike ">19<font color="red"><b>(5)</b></font>
                    </td>
                    <td nowrap="" class="hStrike vStrike ">30</td>
                    <td nowrap="" class="hStrike ">50</td>
                    <td nowrap="" class="hStrike ">10<font color="red"><b>(2)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">0</td>
                    <td nowrap="">--</td>
                </tr>
                <tr align="center">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-97-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-582"><span class="MJXp-mstyle" id="MJXp-Span-583"><span class="MJXp-msub" id="MJXp-Span-584"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-585" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-586" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-97">S_2</script>
                    </td>
                    <td nowrap="" class="vStrike ">70</td>
                    <td nowrap="" class="vStrike ">30</td>
                    <td nowrap="">40</td>
                    <td nowrap="">60</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">9</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-98-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-587"><span class="MJXp-mstyle" id="MJXp-Span-588"><span class="MJXp-mn" id="MJXp-Span-589">20</span><span class="MJXp-mo" id="MJXp-Span-590" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-591">60</span><span class="MJXp-mo" id="MJXp-Span-592" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-593">40</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-98">20=60-40</script>
                    </td>
                </tr>
                <tr align="center">
                    <td nowrap="" class="hStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-99-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-594"><span class="MJXp-mstyle" id="MJXp-Span-595"><span class="MJXp-msub" id="MJXp-Span-596"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-597" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-598" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-99">S_3</script>
                    </td>
                    <td nowrap="" class="hStrike vStrike ">40</td>
                    <td nowrap="" class="hStrike vStrike ">8<font color="red"><b>(8)</b></font>
                    </td>
                    <td nowrap="" class="hStrike ">70</td>
                    <td nowrap="" class="hStrike ">20<font color="red"><b>(10)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">0</td>
                    <td nowrap="">--</td>
                </tr>
                <tr align="center">
                    <td nowrap="" style="padding: 1px;" colspan="8"> </td>
                </tr>
                <tr align="center">
                    <td nowrap="">Demand</td>
                    <td nowrap="">0</td>
                    <td nowrap="">0</td>
                    <td nowrap="">7</td>
                    <td nowrap="">2</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap=""></td>
                    <td nowrap=""></td>
                </tr>
                <tr align="center">
                    <td nowrap="">Column<br>Penalty</td>
                    <td nowrap="">--</td>
                    <td nowrap="">--</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-100-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-599"><span class="MJXp-mstyle" id="MJXp-Span-600"><span class="MJXp-mn" id="MJXp-Span-601">40</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-100">40</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-101-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-602"><span class="MJXp-mstyle" id="MJXp-Span-603"><span class="MJXp-mn" id="MJXp-Span-604">60</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-101">60</script>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap=""></td>
                    <td nowrap=""></td>
                </tr>
            </tbody>
        </table><br><br>The maximum penalty, 60, occurs in column <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-102-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-605"><span class="MJXp-mstyle" id="MJXp-Span-606"><span class="MJXp-msub" id="MJXp-Span-607"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-608" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-609" style="vertical-align: -0.4em;">4</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-102">D_4</script>. <br><br>The minimum <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-103-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-610"><span class="MJXp-mstyle" id="MJXp-Span-611"><span class="MJXp-msub" id="MJXp-Span-612"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-613" style="margin-right: 0.05em;">c</span><span class="MJXp-mrow MJXp-script" id="MJXp-Span-614" style="vertical-align: -0.4em;"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-615">i</span><span class="MJXp-mi MJXp-italic" id="MJXp-Span-616">j</span></span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-103">c_(ij)</script> in this column is <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-104-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-617"><span class="MJXp-mstyle" id="MJXp-Span-618"><span class="MJXp-msub" id="MJXp-Span-619"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-620" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-621" style="vertical-align: -0.4em;">24</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-104">c_24</script> = 60.<br><br>The maximum allocation in this cell is min(9,2) = <font color="red"><b>2</b></font>.<br>It satisfy demand of <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-105-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-622"><span class="MJXp-mstyle" id="MJXp-Span-623"><span class="MJXp-msub" id="MJXp-Span-624"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-625" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-626" style="vertical-align: -0.4em;">4</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-105">D_4</script> and adjust the supply of <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-106-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-627"><span class="MJXp-mstyle" id="MJXp-Span-628"><span class="MJXp-msub" id="MJXp-Span-629"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-630" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-631" style="vertical-align: -0.4em;">2</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-106">S_2</script> from 9 to 7 (9 - 2 = 7). <br><br>Table-6<br>
        <table border="1" cellspacing="0" cellpadding="6" style="border-collapse:collapse;">
            <tbody>
                <tr align="center">
                    <td nowrap=""> </td>
                    <td nowrap="" class="vStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-107-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-632"><span class="MJXp-mstyle" id="MJXp-Span-633"><span class="MJXp-msub" id="MJXp-Span-634"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-635" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-636" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-107">D_1</script>
                    </td>
                    <td nowrap="" class="vStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-108-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-637"><span class="MJXp-mstyle" id="MJXp-Span-638"><span class="MJXp-msub" id="MJXp-Span-639"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-640" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-641" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-108">D_2</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-109-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-642"><span class="MJXp-mstyle" id="MJXp-Span-643"><span class="MJXp-msub" id="MJXp-Span-644"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-645" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-646" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-109">D_3</script>
                    </td>
                    <td nowrap="" class="vStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-110-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-647"><span class="MJXp-mstyle" id="MJXp-Span-648"><span class="MJXp-msub" id="MJXp-Span-649"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-650" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-651" style="vertical-align: -0.4em;">4</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-110">D_4</script>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">Supply</td>
                    <td nowrap="">Row Penalty</td>
                </tr>
                <tr align="center">
                    <td nowrap="" class="hStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-111-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-652"><span class="MJXp-mstyle" id="MJXp-Span-653"><span class="MJXp-msub" id="MJXp-Span-654"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-655" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-656" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-111">S_1</script>
                    </td>
                    <td nowrap="" class="hStrike vStrike ">19<font color="red"><b>(5)</b></font>
                    </td>
                    <td nowrap="" class="hStrike vStrike ">30</td>
                    <td nowrap="" class="hStrike ">50</td>
                    <td nowrap="" class="hStrike vStrike ">10<font color="red"><b>(2)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">0</td>
                    <td nowrap="">--</td>
                </tr>
                <tr align="center">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-112-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-657"><span class="MJXp-mstyle" id="MJXp-Span-658"><span class="MJXp-msub" id="MJXp-Span-659"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-660" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-661" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-112">S_2</script>
                    </td>
                    <td nowrap="" class="vStrike ">70</td>
                    <td nowrap="" class="vStrike ">30</td>
                    <td nowrap="">40</td>
                    <td nowrap="" class="vStrike ">60<font color="red"><b>(2)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">7</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-113-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-662"><span class="MJXp-mstyle" id="MJXp-Span-663"><span class="MJXp-mn" id="MJXp-Span-664">40</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-113">40</script>
                    </td>
                </tr>
                <tr align="center">
                    <td nowrap="" class="hStrike "><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-114-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-665"><span class="MJXp-mstyle" id="MJXp-Span-666"><span class="MJXp-msub" id="MJXp-Span-667"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-668" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-669" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-114">S_3</script>
                    </td>
                    <td nowrap="" class="hStrike vStrike ">40</td>
                    <td nowrap="" class="hStrike vStrike ">8<font color="red"><b>(8)</b></font>
                    </td>
                    <td nowrap="" class="hStrike ">70</td>
                    <td nowrap="" class="hStrike vStrike ">20<font color="red"><b>(10)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">0</td>
                    <td nowrap="">--</td>
                </tr>
                <tr align="center">
                    <td nowrap="" style="padding: 1px;" colspan="8"> </td>
                </tr>
                <tr align="center">
                    <td nowrap="">Demand</td>
                    <td nowrap="">0</td>
                    <td nowrap="">0</td>
                    <td nowrap="">7</td>
                    <td nowrap="">0</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap=""></td>
                    <td nowrap=""></td>
                </tr>
                <tr align="center">
                    <td nowrap="">Column<br>Penalty</td>
                    <td nowrap="">--</td>
                    <td nowrap="">--</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-115-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-670"><span class="MJXp-mstyle" id="MJXp-Span-671"><span class="MJXp-mn" id="MJXp-Span-672">40</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-115">40</script>
                    </td>
                    <td nowrap="">--</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap=""></td>
                    <td nowrap=""></td>
                </tr>
            </tbody>
        </table><br><br>The maximum penalty, 40, occurs in row <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-116-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-673"><span class="MJXp-mstyle" id="MJXp-Span-674"><span class="MJXp-msub" id="MJXp-Span-675"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-676" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-677" style="vertical-align: -0.4em;">2</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-116">S_2</script>. <br><br>The minimum <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-117-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-678"><span class="MJXp-mstyle" id="MJXp-Span-679"><span class="MJXp-msub" id="MJXp-Span-680"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-681" style="margin-right: 0.05em;">c</span><span class="MJXp-mrow MJXp-script" id="MJXp-Span-682" style="vertical-align: -0.4em;"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-683">i</span><span class="MJXp-mi MJXp-italic" id="MJXp-Span-684">j</span></span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-117">c_(ij)</script> in this row is <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-118-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-685"><span class="MJXp-mstyle" id="MJXp-Span-686"><span class="MJXp-msub" id="MJXp-Span-687"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-688" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-689" style="vertical-align: -0.4em;">23</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-118">c_23</script> = 40.<br><br>The maximum allocation in this cell is min(7,7) = <font color="red"><b>7</b></font>.<br>It satisfy supply of <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-119-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-690"><span class="MJXp-mstyle" id="MJXp-Span-691"><span class="MJXp-msub" id="MJXp-Span-692"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-693" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-694" style="vertical-align: -0.4em;">2</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-119">S_2</script> and demand of <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-120-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-695"><span class="MJXp-mstyle" id="MJXp-Span-696"><span class="MJXp-msub" id="MJXp-Span-697"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-698" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-699" style="vertical-align: -0.4em;">3</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-120">D_3</script>.<br><br><br>Initial feasible solution is <br>
        <table border="1" cellspacing="0" cellpadding="6" style="border-collapse:collapse;">
            <tbody>
                <tr align="center">
                    <td nowrap=""> </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-121-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-700"><span class="MJXp-mstyle" id="MJXp-Span-701"><span class="MJXp-msub" id="MJXp-Span-702"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-703" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-704" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-121">D_1</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-122-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-705"><span class="MJXp-mstyle" id="MJXp-Span-706"><span class="MJXp-msub" id="MJXp-Span-707"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-708" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-709" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-122">D_2</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-123-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-710"><span class="MJXp-mstyle" id="MJXp-Span-711"><span class="MJXp-msub" id="MJXp-Span-712"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-713" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-714" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-123">D_3</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-124-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-715"><span class="MJXp-mstyle" id="MJXp-Span-716"><span class="MJXp-msub" id="MJXp-Span-717"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-718" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-719" style="vertical-align: -0.4em;">4</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-124">D_4</script>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">Supply</td>
                    <td nowrap="">Row Penalty</td>
                </tr>
                <tr align="center">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-125-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-720"><span class="MJXp-mstyle" id="MJXp-Span-721"><span class="MJXp-msub" id="MJXp-Span-722"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-723" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-724" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-125">S_1</script>
                    </td>
                    <td nowrap="">19<font color="red"><b>(5)</b></font>
                    </td>
                    <td nowrap="">30</td>
                    <td nowrap="">50</td>
                    <td nowrap="">10<font color="red"><b>(2)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">7</td>
                    <td nowrap="">&nbsp;9 | &nbsp;9 | 40 | 40 | -- | -- | </td>
                </tr>
                <tr align="center">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-126-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-725"><span class="MJXp-mstyle" id="MJXp-Span-726"><span class="MJXp-msub" id="MJXp-Span-727"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-728" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-729" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-126">S_2</script>
                    </td>
                    <td nowrap="">70</td>
                    <td nowrap="">30</td>
                    <td nowrap="">40<font color="red"><b>(7)</b></font>
                    </td>
                    <td nowrap="">60<font color="red"><b>(2)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">9</td>
                    <td nowrap="">10 | 20 | 20 | 20 | 20 | 40 | </td>
                </tr>
                <tr align="center">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-127-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-730"><span class="MJXp-mstyle" id="MJXp-Span-731"><span class="MJXp-msub" id="MJXp-Span-732"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-733" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-734" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-127">S_3</script>
                    </td>
                    <td nowrap="">40</td>
                    <td nowrap="">8<font color="red"><b>(8)</b></font>
                    </td>
                    <td nowrap="">70</td>
                    <td nowrap="">20<font color="red"><b>(10)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">18</td>
                    <td nowrap="">12 | 20 | 50 | -- | -- | -- | </td>
                </tr>
                <tr align="center">
                    <td nowrap="" style="padding: 1px;" colspan="8"> </td>
                </tr>
                <tr align="center">
                    <td nowrap="">Demand</td>
                    <td nowrap="">5</td>
                    <td nowrap="">8</td>
                    <td nowrap="">7</td>
                    <td nowrap="">14</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap=""></td>
                    <td nowrap=""></td>
                </tr>
                <tr align="center">
                    <td nowrap="">Column<br>Penalty</td>
                    <td nowrap="">21<br>21<br>--<br>--<br>--<br>--<br></td>
                    <td nowrap="">22<br>--<br>--<br>--<br>--<br>--<br></td>
                    <td nowrap="">10<br>10<br>10<br>10<br>40<br>40<br></td>
                    <td nowrap="">10<br>10<br>10<br>50<br>60<br>--<br></td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap=""></td>
                    <td nowrap=""></td>
                </tr>
            </tbody>
        </table><br><br>The minimum total transportation cost <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-128-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-735"><span class="MJXp-mstyle" id="MJXp-Span-736"><span class="MJXp-mo" id="MJXp-Span-737" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-738">19</span><span class="MJXp-mo" id="MJXp-Span-739" style="margin-left: 0.267em; margin-right: 0.267em;">×</span><span class="MJXp-mn" id="MJXp-Span-740">5</span><span class="MJXp-mo" id="MJXp-Span-741" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-mn" id="MJXp-Span-742">10</span><span class="MJXp-mo" id="MJXp-Span-743" style="margin-left: 0.267em; margin-right: 0.267em;">×</span><span class="MJXp-mn" id="MJXp-Span-744">2</span><span class="MJXp-mo" id="MJXp-Span-745" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-mn" id="MJXp-Span-746">40</span><span class="MJXp-mo" id="MJXp-Span-747" style="margin-left: 0.267em; margin-right: 0.267em;">×</span><span class="MJXp-mn" id="MJXp-Span-748">7</span><span class="MJXp-mo" id="MJXp-Span-749" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-mn" id="MJXp-Span-750">60</span><span class="MJXp-mo" id="MJXp-Span-751" style="margin-left: 0.267em; margin-right: 0.267em;">×</span><span class="MJXp-mn" id="MJXp-Span-752">2</span><span class="MJXp-mo" id="MJXp-Span-753" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-mn" id="MJXp-Span-754">8</span><span class="MJXp-mo" id="MJXp-Span-755" style="margin-left: 0.267em; margin-right: 0.267em;">×</span><span class="MJXp-mn" id="MJXp-Span-756">8</span><span class="MJXp-mo" id="MJXp-Span-757" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-mn" id="MJXp-Span-758">20</span><span class="MJXp-mo" id="MJXp-Span-759" style="margin-left: 0.267em; margin-right: 0.267em;">×</span><span class="MJXp-mn" id="MJXp-Span-760">10</span><span class="MJXp-mo" id="MJXp-Span-761" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-762">779</span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-128">= 19 xx 5 + 10 xx 2 + 40 xx 7 + 60 xx 2 + 8 xx 8 + 20 xx 10 = 779</script><br><br>Here, the number of allocated cells = 6 is equal to m + n - 1 = 3 + 4 - 1 = 6<br><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-129-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-763"><span class="MJXp-mstyle" id="MJXp-Span-764"><span class="MJXp-mo" id="MJXp-Span-765" style="margin-left: 0.333em; margin-right: 0.333em;">∴</span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-129">:.</script> This solution is non-degenerate<br><br>
        <hr><br>Optimality test using modi method...<br>Allocation Table is<br>
        <table border="1" cellspacing="0" cellpadding="6" style="border-collapse:collapse;">
            <tbody>
                <tr align="left">
                    <td nowrap=""> </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-130-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-766"><span class="MJXp-mstyle" id="MJXp-Span-767"><span class="MJXp-msub" id="MJXp-Span-768"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-769" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-770" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-130">D_1</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-131-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-771"><span class="MJXp-mstyle" id="MJXp-Span-772"><span class="MJXp-msub" id="MJXp-Span-773"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-774" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-775" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-131">D_2</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-132-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-776"><span class="MJXp-mstyle" id="MJXp-Span-777"><span class="MJXp-msub" id="MJXp-Span-778"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-779" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-780" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-132">D_3</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-133-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-781"><span class="MJXp-mstyle" id="MJXp-Span-782"><span class="MJXp-msub" id="MJXp-Span-783"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-784" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-785" style="vertical-align: -0.4em;">4</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-133">D_4</script>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">Supply</td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-134-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-786"><span class="MJXp-mstyle" id="MJXp-Span-787"><span class="MJXp-msub" id="MJXp-Span-788"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-789" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-790" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-134">S_1</script>
                    </td>
                    <td nowrap="">19 <font color="red"><b>(5)</b></font>
                    </td>
                    <td nowrap="">30 </td>
                    <td nowrap="">50 </td>
                    <td nowrap="">10 <font color="red"><b>(2)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">7</td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-135-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-791"><span class="MJXp-mstyle" id="MJXp-Span-792"><span class="MJXp-msub" id="MJXp-Span-793"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-794" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-795" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-135">S_2</script>
                    </td>
                    <td nowrap="">70 </td>
                    <td nowrap="">30 </td>
                    <td nowrap="">40 <font color="red"><b>(7)</b></font>
                    </td>
                    <td nowrap="">60 <font color="red"><b>(2)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">9</td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-136-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-796"><span class="MJXp-mstyle" id="MJXp-Span-797"><span class="MJXp-msub" id="MJXp-Span-798"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-799" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-800" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-136">S_3</script>
                    </td>
                    <td nowrap="">40 </td>
                    <td nowrap="">8 <font color="red"><b>(8)</b></font>
                    </td>
                    <td nowrap="">70 </td>
                    <td nowrap="">20 <font color="red"><b>(10)</b></font>
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
        </table><br><br>Iteration-1 of optimality test<br><b>1.</b> Find <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-137-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-801"><span class="MJXp-mstyle" id="MJXp-Span-802"><span class="MJXp-msub" id="MJXp-Span-803"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-804" style="margin-right: 0.05em;">u</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-805" style="vertical-align: -0.4em;">i</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-137">u_i</script> and <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-138-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-806"><span class="MJXp-mstyle" id="MJXp-Span-807"><span class="MJXp-msub" id="MJXp-Span-808"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-809" style="margin-right: 0.05em;">v</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-810" style="vertical-align: -0.4em;">j</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-138">v_j</script> for all occupied cells(i,j), where <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-139-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-811"><span class="MJXp-mstyle" id="MJXp-Span-812"><span class="MJXp-msub" id="MJXp-Span-813"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-814" style="margin-right: 0.05em;">c</span><span class="MJXp-mrow MJXp-script" id="MJXp-Span-815" style="vertical-align: -0.4em;"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-816">i</span><span class="MJXp-mi MJXp-italic" id="MJXp-Span-817">j</span></span></span><span class="MJXp-mo" id="MJXp-Span-818" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-819"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-820" style="margin-right: 0.05em;">u</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-821" style="vertical-align: -0.4em;">i</span></span><span class="MJXp-mo" id="MJXp-Span-822" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-msub" id="MJXp-Span-823"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-824" style="margin-right: 0.05em;">v</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-825" style="vertical-align: -0.4em;">j</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-139">c_(ij) = u_i + v_j</script><br><br><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-140-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-826"><span class="MJXp-mstyle" id="MJXp-Span-827"><span class="MJXp-mn" id="MJXp-Span-828">1</span><span class="MJXp-mo" id="MJXp-Span-829" style="margin-left: 0em; margin-right: 0.222em;">.</span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-140">1.</script> Substituting, <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-141-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-830"><span class="MJXp-mstyle" id="MJXp-Span-831"><span class="MJXp-msub" id="MJXp-Span-832"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-833" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-834" style="vertical-align: -0.4em;">4</span></span><span class="MJXp-mo" id="MJXp-Span-835" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-836">0</span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-141">v_4 = 0</script>, we get<br><br><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-142-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-837"><span class="MJXp-mstyle" id="MJXp-Span-838"><span class="MJXp-mn" id="MJXp-Span-839">2</span><span class="MJXp-mo" id="MJXp-Span-840" style="margin-left: 0em; margin-right: 0.222em;">.</span><span class="MJXp-msub" id="MJXp-Span-841"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-842" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-843" style="vertical-align: -0.4em;">14</span></span><span class="MJXp-mo" id="MJXp-Span-844" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-845"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-846" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-847" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-848" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-msub" id="MJXp-Span-849"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-850" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-851" style="vertical-align: -0.4em;">4</span></span><span class="MJXp-mo" id="MJXp-Span-852" style="margin-left: 0.333em; margin-right: 0.333em;">⇒</span><span class="MJXp-msub" id="MJXp-Span-853"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-854" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-855" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-856" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-857"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-858" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-859" style="vertical-align: -0.4em;">14</span></span><span class="MJXp-mo" id="MJXp-Span-860" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-msub" id="MJXp-Span-861"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-862" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-863" style="vertical-align: -0.4em;">4</span></span><span class="MJXp-mo" id="MJXp-Span-864" style="margin-left: 0.333em; margin-right: 0.333em;">⇒</span><span class="MJXp-msub" id="MJXp-Span-865"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-866" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-867" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-868" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-869">10</span><span class="MJXp-mo" id="MJXp-Span-870" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-871">0</span><span class="MJXp-mo" id="MJXp-Span-872" style="margin-left: 0.333em; margin-right: 0.333em;">⇒</span><span class="MJXp-msub" id="MJXp-Span-873"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-874" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-875" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-876" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-877">10</span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-142">2. c_14 = u_1 + v_4=>u_1 = c_14 - v_4=>u_1 = 10 -0=>u_1 = 10</script><br><br><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-143-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-878"><span class="MJXp-mstyle" id="MJXp-Span-879"><span class="MJXp-mn" id="MJXp-Span-880">3</span><span class="MJXp-mo" id="MJXp-Span-881" style="margin-left: 0em; margin-right: 0.222em;">.</span><span class="MJXp-msub" id="MJXp-Span-882"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-883" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-884" style="vertical-align: -0.4em;">11</span></span><span class="MJXp-mo" id="MJXp-Span-885" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-886"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-887" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-888" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-889" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-msub" id="MJXp-Span-890"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-891" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-892" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-893" style="margin-left: 0.333em; margin-right: 0.333em;">⇒</span><span class="MJXp-msub" id="MJXp-Span-894"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-895" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-896" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-897" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-898"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-899" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-900" style="vertical-align: -0.4em;">11</span></span><span class="MJXp-mo" id="MJXp-Span-901" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-msub" id="MJXp-Span-902"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-903" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-904" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-905" style="margin-left: 0.333em; margin-right: 0.333em;">⇒</span><span class="MJXp-msub" id="MJXp-Span-906"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-907" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-908" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-909" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-910">19</span><span class="MJXp-mo" id="MJXp-Span-911" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-912">10</span><span class="MJXp-mo" id="MJXp-Span-913" style="margin-left: 0.333em; margin-right: 0.333em;">⇒</span><span class="MJXp-msub" id="MJXp-Span-914"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-915" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-916" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-917" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-918">9</span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-143">3. c_11 = u_1 + v_1=>v_1 = c_11 - u_1=>v_1 = 19 -10=>v_1 = 9</script><br><br><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-144-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-919"><span class="MJXp-mstyle" id="MJXp-Span-920"><span class="MJXp-mn" id="MJXp-Span-921">4</span><span class="MJXp-mo" id="MJXp-Span-922" style="margin-left: 0em; margin-right: 0.222em;">.</span><span class="MJXp-msub" id="MJXp-Span-923"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-924" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-925" style="vertical-align: -0.4em;">24</span></span><span class="MJXp-mo" id="MJXp-Span-926" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-927"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-928" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-929" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-930" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-msub" id="MJXp-Span-931"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-932" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-933" style="vertical-align: -0.4em;">4</span></span><span class="MJXp-mo" id="MJXp-Span-934" style="margin-left: 0.333em; margin-right: 0.333em;">⇒</span><span class="MJXp-msub" id="MJXp-Span-935"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-936" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-937" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-938" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-939"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-940" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-941" style="vertical-align: -0.4em;">24</span></span><span class="MJXp-mo" id="MJXp-Span-942" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-msub" id="MJXp-Span-943"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-944" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-945" style="vertical-align: -0.4em;">4</span></span><span class="MJXp-mo" id="MJXp-Span-946" style="margin-left: 0.333em; margin-right: 0.333em;">⇒</span><span class="MJXp-msub" id="MJXp-Span-947"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-948" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-949" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-950" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-951">60</span><span class="MJXp-mo" id="MJXp-Span-952" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-953">0</span><span class="MJXp-mo" id="MJXp-Span-954" style="margin-left: 0.333em; margin-right: 0.333em;">⇒</span><span class="MJXp-msub" id="MJXp-Span-955"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-956" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-957" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-958" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-959">60</span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-144">4. c_24 = u_2 + v_4=>u_2 = c_24 - v_4=>u_2 = 60 -0=>u_2 = 60</script><br><br><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-145-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-960"><span class="MJXp-mstyle" id="MJXp-Span-961"><span class="MJXp-mn" id="MJXp-Span-962">5</span><span class="MJXp-mo" id="MJXp-Span-963" style="margin-left: 0em; margin-right: 0.222em;">.</span><span class="MJXp-msub" id="MJXp-Span-964"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-965" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-966" style="vertical-align: -0.4em;">23</span></span><span class="MJXp-mo" id="MJXp-Span-967" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-968"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-969" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-970" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-971" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-msub" id="MJXp-Span-972"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-973" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-974" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-975" style="margin-left: 0.333em; margin-right: 0.333em;">⇒</span><span class="MJXp-msub" id="MJXp-Span-976"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-977" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-978" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-979" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-980"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-981" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-982" style="vertical-align: -0.4em;">23</span></span><span class="MJXp-mo" id="MJXp-Span-983" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-msub" id="MJXp-Span-984"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-985" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-986" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-987" style="margin-left: 0.333em; margin-right: 0.333em;">⇒</span><span class="MJXp-msub" id="MJXp-Span-988"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-989" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-990" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-991" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-992">40</span><span class="MJXp-mo" id="MJXp-Span-993" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-994">60</span><span class="MJXp-mo" id="MJXp-Span-995" style="margin-left: 0.333em; margin-right: 0.333em;">⇒</span><span class="MJXp-msub" id="MJXp-Span-996"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-997" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-998" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-999" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mo" id="MJXp-Span-1000" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-1001">20</span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-145">5. c_23 = u_2 + v_3=>v_3 = c_23 - u_2=>v_3 = 40 -60=>v_3 = -20</script><br><br><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-146-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1002"><span class="MJXp-mstyle" id="MJXp-Span-1003"><span class="MJXp-mn" id="MJXp-Span-1004">6</span><span class="MJXp-mo" id="MJXp-Span-1005" style="margin-left: 0em; margin-right: 0.222em;">.</span><span class="MJXp-msub" id="MJXp-Span-1006"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1007" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1008" style="vertical-align: -0.4em;">34</span></span><span class="MJXp-mo" id="MJXp-Span-1009" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-1010"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1011" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1012" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-1013" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-msub" id="MJXp-Span-1014"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1015" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1016" style="vertical-align: -0.4em;">4</span></span><span class="MJXp-mo" id="MJXp-Span-1017" style="margin-left: 0.333em; margin-right: 0.333em;">⇒</span><span class="MJXp-msub" id="MJXp-Span-1018"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1019" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1020" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-1021" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-1022"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1023" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1024" style="vertical-align: -0.4em;">34</span></span><span class="MJXp-mo" id="MJXp-Span-1025" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-msub" id="MJXp-Span-1026"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1027" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1028" style="vertical-align: -0.4em;">4</span></span><span class="MJXp-mo" id="MJXp-Span-1029" style="margin-left: 0.333em; margin-right: 0.333em;">⇒</span><span class="MJXp-msub" id="MJXp-Span-1030"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1031" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1032" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-1033" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-1034">20</span><span class="MJXp-mo" id="MJXp-Span-1035" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-1036">0</span><span class="MJXp-mo" id="MJXp-Span-1037" style="margin-left: 0.333em; margin-right: 0.333em;">⇒</span><span class="MJXp-msub" id="MJXp-Span-1038"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1039" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1040" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-1041" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-1042">20</span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-146">6. c_34 = u_3 + v_4=>u_3 = c_34 - v_4=>u_3 = 20 -0=>u_3 = 20</script><br><br><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-147-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1043"><span class="MJXp-mstyle" id="MJXp-Span-1044"><span class="MJXp-mn" id="MJXp-Span-1045">7</span><span class="MJXp-mo" id="MJXp-Span-1046" style="margin-left: 0em; margin-right: 0.222em;">.</span><span class="MJXp-msub" id="MJXp-Span-1047"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1048" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1049" style="vertical-align: -0.4em;">32</span></span><span class="MJXp-mo" id="MJXp-Span-1050" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-1051"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1052" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1053" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-1054" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-msub" id="MJXp-Span-1055"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1056" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1057" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-1058" style="margin-left: 0.333em; margin-right: 0.333em;">⇒</span><span class="MJXp-msub" id="MJXp-Span-1059"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1060" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1061" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-1062" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-1063"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1064" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1065" style="vertical-align: -0.4em;">32</span></span><span class="MJXp-mo" id="MJXp-Span-1066" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-msub" id="MJXp-Span-1067"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1068" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1069" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-1070" style="margin-left: 0.333em; margin-right: 0.333em;">⇒</span><span class="MJXp-msub" id="MJXp-Span-1071"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1072" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1073" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-1074" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-1075">8</span><span class="MJXp-mo" id="MJXp-Span-1076" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-1077">20</span><span class="MJXp-mo" id="MJXp-Span-1078" style="margin-left: 0.333em; margin-right: 0.333em;">⇒</span><span class="MJXp-msub" id="MJXp-Span-1079"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1080" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1081" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-1082" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mo" id="MJXp-Span-1083" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-1084">12</span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-147">7. c_32 = u_3 + v_2=>v_2 = c_32 - u_3=>v_2 = 8 -20=>v_2 = -12</script><br><br>
        <table border="1" cellspacing="0" cellpadding="6" style="border-collapse:collapse;">
            <tbody>
                <tr align="left">
                    <td nowrap=""> </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-148-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1085"><span class="MJXp-mstyle" id="MJXp-Span-1086"><span class="MJXp-msub" id="MJXp-Span-1087"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1088" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1089" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-148">D_1</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-149-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1090"><span class="MJXp-mstyle" id="MJXp-Span-1091"><span class="MJXp-msub" id="MJXp-Span-1092"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1093" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1094" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-149">D_2</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-150-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1095"><span class="MJXp-mstyle" id="MJXp-Span-1096"><span class="MJXp-msub" id="MJXp-Span-1097"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1098" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1099" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-150">D_3</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-151-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1100"><span class="MJXp-mstyle" id="MJXp-Span-1101"><span class="MJXp-msub" id="MJXp-Span-1102"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1103" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1104" style="vertical-align: -0.4em;">4</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-151">D_4</script>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">Supply</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-152-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1105"><span class="MJXp-mstyle" id="MJXp-Span-1106"><span class="MJXp-msub" id="MJXp-Span-1107"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1108" style="margin-right: 0.05em;">u</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-1109" style="vertical-align: -0.4em;">i</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-152">u_i</script>
                    </td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-153-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1110"><span class="MJXp-mstyle" id="MJXp-Span-1111"><span class="MJXp-msub" id="MJXp-Span-1112"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1113" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1114" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-153">S_1</script>
                    </td>
                    <td nowrap="">19 <font color="red"><b>(5)</b></font>
                    </td>
                    <td nowrap="">30 </td>
                    <td nowrap="">50 </td>
                    <td nowrap="">10 <font color="red"><b>(2)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">7</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-154-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1115"><span class="MJXp-mstyle" id="MJXp-Span-1116"><span class="MJXp-msub" id="MJXp-Span-1117"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1118" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1119" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-1120" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-1121">10</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-154">u_1=10</script>
                    </td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-155-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1122"><span class="MJXp-mstyle" id="MJXp-Span-1123"><span class="MJXp-msub" id="MJXp-Span-1124"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1125" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1126" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-155">S_2</script>
                    </td>
                    <td nowrap="">70 </td>
                    <td nowrap="">30 </td>
                    <td nowrap="">40 <font color="red"><b>(7)</b></font>
                    </td>
                    <td nowrap="">60 <font color="red"><b>(2)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">9</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-156-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1127"><span class="MJXp-mstyle" id="MJXp-Span-1128"><span class="MJXp-msub" id="MJXp-Span-1129"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1130" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1131" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-1132" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-1133">60</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-156">u_2=60</script>
                    </td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-157-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1134"><span class="MJXp-mstyle" id="MJXp-Span-1135"><span class="MJXp-msub" id="MJXp-Span-1136"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1137" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1138" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-157">S_3</script>
                    </td>
                    <td nowrap="">40 </td>
                    <td nowrap="">8 <font color="red"><b>(8)</b></font>
                    </td>
                    <td nowrap="">70 </td>
                    <td nowrap="">20 <font color="red"><b>(10)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">18</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-158-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1139"><span class="MJXp-mstyle" id="MJXp-Span-1140"><span class="MJXp-msub" id="MJXp-Span-1141"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1142" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1143" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-1144" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-1145">20</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-158">u_3=20</script>
                    </td>
                </tr>
                <tr align="left">
                    <td nowrap="" style="padding: 1px;" colspan="8"> </td>
                </tr>
                <tr align="left">
                    <td nowrap="">Demand</td>
                    <td nowrap="">5</td>
                    <td nowrap="">8</td>
                    <td nowrap="">7</td>
                    <td nowrap="">14</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap=""></td>
                    <td nowrap=""></td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-159-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1146"><span class="MJXp-mstyle" id="MJXp-Span-1147"><span class="MJXp-msub" id="MJXp-Span-1148"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1149" style="margin-right: 0.05em;">v</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-1150" style="vertical-align: -0.4em;">j</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-159">v_j</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-160-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1151"><span class="MJXp-mstyle" id="MJXp-Span-1152"><span class="MJXp-msub" id="MJXp-Span-1153"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1154" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1155" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-1156" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-1157">9</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-160">v_1=9</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-161-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1158"><span class="MJXp-mstyle" id="MJXp-Span-1159"><span class="MJXp-msub" id="MJXp-Span-1160"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1161" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1162" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-1163" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mo" id="MJXp-Span-1164" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-1165">12</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-161">v_2=-12</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-162-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1166"><span class="MJXp-mstyle" id="MJXp-Span-1167"><span class="MJXp-msub" id="MJXp-Span-1168"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1169" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1170" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-1171" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mo" id="MJXp-Span-1172" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-1173">20</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-162">v_3=-20</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-163-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1174"><span class="MJXp-mstyle" id="MJXp-Span-1175"><span class="MJXp-msub" id="MJXp-Span-1176"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1177" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1178" style="vertical-align: -0.4em;">4</span></span><span class="MJXp-mo" id="MJXp-Span-1179" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-1180">0</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-163">v_4=0</script>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap=""></td>
                    <td nowrap=""></td>
                </tr>
            </tbody>
        </table><br><br>
        <font color="blue"><b>2.</b> Find <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-164-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1181"><span class="MJXp-mstyle" id="MJXp-Span-1182"><span class="MJXp-msub" id="MJXp-Span-1183"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1184" style="margin-right: 0.05em;">d</span><span class="MJXp-mrow MJXp-script" id="MJXp-Span-1185" style="vertical-align: -0.4em;"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1186">i</span><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1187">j</span></span></span></span></span></span>
            <script type="math/asciimath" id="MathJax-Element-164">d_(ij)</script> for all unoccupied cells(i,j), where <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-165-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1188"><span class="MJXp-mstyle" id="MJXp-Span-1189"><span class="MJXp-msub" id="MJXp-Span-1190"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1191" style="margin-right: 0.05em;">d</span><span class="MJXp-mrow MJXp-script" id="MJXp-Span-1192" style="vertical-align: -0.4em;"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1193">i</span><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1194">j</span></span></span><span class="MJXp-mo" id="MJXp-Span-1195" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-1196"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1197" style="margin-right: 0.05em;">c</span><span class="MJXp-mrow MJXp-script" id="MJXp-Span-1198" style="vertical-align: -0.4em;"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1199">i</span><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1200">j</span></span></span><span class="MJXp-mo" id="MJXp-Span-1201" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mrow" id="MJXp-Span-1202"><span class="MJXp-mo" id="MJXp-Span-1203" style="margin-left: 0em; margin-right: 0em; vertical-align: -0.244em;"><span class="MJXp-right MJXp-scale7" style="font-size: 1.978em; margin-left: -0.05em;">(</span></span><span class="MJXp-msub" id="MJXp-Span-1204"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1205" style="margin-right: 0.05em;">u</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-1206" style="vertical-align: -0.4em;">i</span></span><span class="MJXp-mo" id="MJXp-Span-1207" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-msub" id="MJXp-Span-1208"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1209" style="margin-right: 0.05em;">v</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-1210" style="vertical-align: -0.4em;">j</span></span><span class="MJXp-mo" id="MJXp-Span-1211" style="margin-left: 0em; margin-right: 0em; vertical-align: -0.244em;"><span class="MJXp-right MJXp-scale7" style="font-size: 1.978em; margin-left: -0.05em;">)</span></span></span></span></span></span>
            <script type="math/asciimath" id="MathJax-Element-165">d_(ij) = c_(ij) - (u_i + v_j)</script>
        </font><br><br><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-166-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1212"><span class="MJXp-mstyle" id="MJXp-Span-1213"><span class="MJXp-mn" id="MJXp-Span-1214">1</span><span class="MJXp-mo" id="MJXp-Span-1215" style="margin-left: 0em; margin-right: 0.222em;">.</span><span class="MJXp-msub" id="MJXp-Span-1216"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1217" style="margin-right: 0.05em;">d</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1218" style="vertical-align: -0.4em;">12</span></span><span class="MJXp-mo" id="MJXp-Span-1219" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-1220"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1221" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1222" style="vertical-align: -0.4em;">12</span></span><span class="MJXp-mo" id="MJXp-Span-1223" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mrow" id="MJXp-Span-1224"><span class="MJXp-mo" id="MJXp-Span-1225" style="margin-left: 0em; margin-right: 0em; vertical-align: -0.244em;"><span class="MJXp-right MJXp-scale7" style="font-size: 1.978em; margin-left: -0.05em;">(</span></span><span class="MJXp-msub" id="MJXp-Span-1226"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1227" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1228" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-1229" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-msub" id="MJXp-Span-1230"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1231" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1232" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-1233" style="margin-left: 0em; margin-right: 0em; vertical-align: -0.244em;"><span class="MJXp-right MJXp-scale7" style="font-size: 1.978em; margin-left: -0.05em;">)</span></span></span><span class="MJXp-mo" id="MJXp-Span-1234" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-1235">30</span><span class="MJXp-mo" id="MJXp-Span-1236" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mrow" id="MJXp-Span-1237"><span class="MJXp-mo" id="MJXp-Span-1238" style="margin-left: 0em; margin-right: 0em;">(</span><span class="MJXp-mn" id="MJXp-Span-1239">10</span><span class="MJXp-mo" id="MJXp-Span-1240" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-1241">12</span><span class="MJXp-mo" id="MJXp-Span-1242" style="margin-left: 0em; margin-right: 0em;">)</span></span><span class="MJXp-mo" id="MJXp-Span-1243" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mstyle" id="MJXp-Span-1244" style="color: blue;"><span class="MJXp-mrow" id="MJXp-Span-1245"><span class="MJXp-mn" id="MJXp-Span-1246">32</span></span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-166">1. d_12 = c_12 - (u_1 + v_2) = 30 - (10 -12) = color{blue}{32} </script><br><br><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-167-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1247"><span class="MJXp-mstyle" id="MJXp-Span-1248"><span class="MJXp-mn" id="MJXp-Span-1249">2</span><span class="MJXp-mo" id="MJXp-Span-1250" style="margin-left: 0em; margin-right: 0.222em;">.</span><span class="MJXp-msub" id="MJXp-Span-1251"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1252" style="margin-right: 0.05em;">d</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1253" style="vertical-align: -0.4em;">13</span></span><span class="MJXp-mo" id="MJXp-Span-1254" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-1255"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1256" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1257" style="vertical-align: -0.4em;">13</span></span><span class="MJXp-mo" id="MJXp-Span-1258" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mrow" id="MJXp-Span-1259"><span class="MJXp-mo" id="MJXp-Span-1260" style="margin-left: 0em; margin-right: 0em; vertical-align: -0.244em;"><span class="MJXp-right MJXp-scale7" style="font-size: 1.978em; margin-left: -0.05em;">(</span></span><span class="MJXp-msub" id="MJXp-Span-1261"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1262" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1263" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-1264" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-msub" id="MJXp-Span-1265"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1266" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1267" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-1268" style="margin-left: 0em; margin-right: 0em; vertical-align: -0.244em;"><span class="MJXp-right MJXp-scale7" style="font-size: 1.978em; margin-left: -0.05em;">)</span></span></span><span class="MJXp-mo" id="MJXp-Span-1269" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-1270">50</span><span class="MJXp-mo" id="MJXp-Span-1271" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mrow" id="MJXp-Span-1272"><span class="MJXp-mo" id="MJXp-Span-1273" style="margin-left: 0em; margin-right: 0em;">(</span><span class="MJXp-mn" id="MJXp-Span-1274">10</span><span class="MJXp-mo" id="MJXp-Span-1275" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-1276">20</span><span class="MJXp-mo" id="MJXp-Span-1277" style="margin-left: 0em; margin-right: 0em;">)</span></span><span class="MJXp-mo" id="MJXp-Span-1278" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mstyle" id="MJXp-Span-1279" style="color: blue;"><span class="MJXp-mrow" id="MJXp-Span-1280"><span class="MJXp-mn" id="MJXp-Span-1281">60</span></span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-167">2. d_13 = c_13 - (u_1 + v_3) = 50 - (10 -20) = color{blue}{60} </script><br><br><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-168-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1282"><span class="MJXp-mstyle" id="MJXp-Span-1283"><span class="MJXp-mn" id="MJXp-Span-1284">3</span><span class="MJXp-mo" id="MJXp-Span-1285" style="margin-left: 0em; margin-right: 0.222em;">.</span><span class="MJXp-msub" id="MJXp-Span-1286"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1287" style="margin-right: 0.05em;">d</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1288" style="vertical-align: -0.4em;">21</span></span><span class="MJXp-mo" id="MJXp-Span-1289" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-1290"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1291" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1292" style="vertical-align: -0.4em;">21</span></span><span class="MJXp-mo" id="MJXp-Span-1293" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mrow" id="MJXp-Span-1294"><span class="MJXp-mo" id="MJXp-Span-1295" style="margin-left: 0em; margin-right: 0em; vertical-align: -0.244em;"><span class="MJXp-right MJXp-scale7" style="font-size: 1.978em; margin-left: -0.05em;">(</span></span><span class="MJXp-msub" id="MJXp-Span-1296"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1297" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1298" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-1299" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-msub" id="MJXp-Span-1300"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1301" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1302" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-1303" style="margin-left: 0em; margin-right: 0em; vertical-align: -0.244em;"><span class="MJXp-right MJXp-scale7" style="font-size: 1.978em; margin-left: -0.05em;">)</span></span></span><span class="MJXp-mo" id="MJXp-Span-1304" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-1305">70</span><span class="MJXp-mo" id="MJXp-Span-1306" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mrow" id="MJXp-Span-1307"><span class="MJXp-mo" id="MJXp-Span-1308" style="margin-left: 0em; margin-right: 0em;">(</span><span class="MJXp-mn" id="MJXp-Span-1309">60</span><span class="MJXp-mo" id="MJXp-Span-1310" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-mn" id="MJXp-Span-1311">9</span><span class="MJXp-mo" id="MJXp-Span-1312" style="margin-left: 0em; margin-right: 0em;">)</span></span><span class="MJXp-mo" id="MJXp-Span-1313" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mstyle" id="MJXp-Span-1314" style="color: blue;"><span class="MJXp-mrow" id="MJXp-Span-1315"><span class="MJXp-mn" id="MJXp-Span-1316">1</span></span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-168">3. d_21 = c_21 - (u_2 + v_1) = 70 - (60 +9) = color{blue}{1} </script><br><br><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-169-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1317"><span class="MJXp-mstyle" id="MJXp-Span-1318"><span class="MJXp-mn" id="MJXp-Span-1319">4</span><span class="MJXp-mo" id="MJXp-Span-1320" style="margin-left: 0em; margin-right: 0.222em;">.</span><span class="MJXp-msub" id="MJXp-Span-1321"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1322" style="margin-right: 0.05em;">d</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1323" style="vertical-align: -0.4em;">22</span></span><span class="MJXp-mo" id="MJXp-Span-1324" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-1325"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1326" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1327" style="vertical-align: -0.4em;">22</span></span><span class="MJXp-mo" id="MJXp-Span-1328" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mrow" id="MJXp-Span-1329"><span class="MJXp-mo" id="MJXp-Span-1330" style="margin-left: 0em; margin-right: 0em; vertical-align: -0.244em;"><span class="MJXp-right MJXp-scale7" style="font-size: 1.978em; margin-left: -0.05em;">(</span></span><span class="MJXp-msub" id="MJXp-Span-1331"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1332" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1333" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-1334" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-msub" id="MJXp-Span-1335"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1336" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1337" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-1338" style="margin-left: 0em; margin-right: 0em; vertical-align: -0.244em;"><span class="MJXp-right MJXp-scale7" style="font-size: 1.978em; margin-left: -0.05em;">)</span></span></span><span class="MJXp-mo" id="MJXp-Span-1339" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-1340">30</span><span class="MJXp-mo" id="MJXp-Span-1341" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mrow" id="MJXp-Span-1342"><span class="MJXp-mo" id="MJXp-Span-1343" style="margin-left: 0em; margin-right: 0em;">(</span><span class="MJXp-mn" id="MJXp-Span-1344">60</span><span class="MJXp-mo" id="MJXp-Span-1345" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-1346">12</span><span class="MJXp-mo" id="MJXp-Span-1347" style="margin-left: 0em; margin-right: 0em;">)</span></span><span class="MJXp-mo" id="MJXp-Span-1348" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mstyle" id="MJXp-Span-1349" style="color: blue;"><span class="MJXp-mrow" id="MJXp-Span-1350"><span class="MJXp-mo" id="MJXp-Span-1351" style="margin-left: 0em; margin-right: 0.111em;">-</span><span class="MJXp-mn" id="MJXp-Span-1352">18</span></span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-169">4. d_22 = c_22 - (u_2 + v_2) = 30 - (60 -12) = color{blue}{-18} </script><br><br><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-170-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1353"><span class="MJXp-mstyle" id="MJXp-Span-1354"><span class="MJXp-mn" id="MJXp-Span-1355">5</span><span class="MJXp-mo" id="MJXp-Span-1356" style="margin-left: 0em; margin-right: 0.222em;">.</span><span class="MJXp-msub" id="MJXp-Span-1357"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1358" style="margin-right: 0.05em;">d</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1359" style="vertical-align: -0.4em;">31</span></span><span class="MJXp-mo" id="MJXp-Span-1360" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-1361"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1362" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1363" style="vertical-align: -0.4em;">31</span></span><span class="MJXp-mo" id="MJXp-Span-1364" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mrow" id="MJXp-Span-1365"><span class="MJXp-mo" id="MJXp-Span-1366" style="margin-left: 0em; margin-right: 0em; vertical-align: -0.244em;"><span class="MJXp-right MJXp-scale7" style="font-size: 1.978em; margin-left: -0.05em;">(</span></span><span class="MJXp-msub" id="MJXp-Span-1367"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1368" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1369" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-1370" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-msub" id="MJXp-Span-1371"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1372" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1373" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-1374" style="margin-left: 0em; margin-right: 0em; vertical-align: -0.244em;"><span class="MJXp-right MJXp-scale7" style="font-size: 1.978em; margin-left: -0.05em;">)</span></span></span><span class="MJXp-mo" id="MJXp-Span-1375" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-1376">40</span><span class="MJXp-mo" id="MJXp-Span-1377" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mrow" id="MJXp-Span-1378"><span class="MJXp-mo" id="MJXp-Span-1379" style="margin-left: 0em; margin-right: 0em;">(</span><span class="MJXp-mn" id="MJXp-Span-1380">20</span><span class="MJXp-mo" id="MJXp-Span-1381" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-mn" id="MJXp-Span-1382">9</span><span class="MJXp-mo" id="MJXp-Span-1383" style="margin-left: 0em; margin-right: 0em;">)</span></span><span class="MJXp-mo" id="MJXp-Span-1384" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mstyle" id="MJXp-Span-1385" style="color: blue;"><span class="MJXp-mrow" id="MJXp-Span-1386"><span class="MJXp-mn" id="MJXp-Span-1387">11</span></span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-170">5. d_31 = c_31 - (u_3 + v_1) = 40 - (20 +9) = color{blue}{11} </script><br><br><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-171-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1388"><span class="MJXp-mstyle" id="MJXp-Span-1389"><span class="MJXp-mn" id="MJXp-Span-1390">6</span><span class="MJXp-mo" id="MJXp-Span-1391" style="margin-left: 0em; margin-right: 0.222em;">.</span><span class="MJXp-msub" id="MJXp-Span-1392"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1393" style="margin-right: 0.05em;">d</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1394" style="vertical-align: -0.4em;">33</span></span><span class="MJXp-mo" id="MJXp-Span-1395" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-1396"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1397" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1398" style="vertical-align: -0.4em;">33</span></span><span class="MJXp-mo" id="MJXp-Span-1399" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mrow" id="MJXp-Span-1400"><span class="MJXp-mo" id="MJXp-Span-1401" style="margin-left: 0em; margin-right: 0em; vertical-align: -0.244em;"><span class="MJXp-right MJXp-scale7" style="font-size: 1.978em; margin-left: -0.05em;">(</span></span><span class="MJXp-msub" id="MJXp-Span-1402"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1403" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1404" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-1405" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-msub" id="MJXp-Span-1406"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1407" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1408" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-1409" style="margin-left: 0em; margin-right: 0em; vertical-align: -0.244em;"><span class="MJXp-right MJXp-scale7" style="font-size: 1.978em; margin-left: -0.05em;">)</span></span></span><span class="MJXp-mo" id="MJXp-Span-1410" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-1411">70</span><span class="MJXp-mo" id="MJXp-Span-1412" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mrow" id="MJXp-Span-1413"><span class="MJXp-mo" id="MJXp-Span-1414" style="margin-left: 0em; margin-right: 0em;">(</span><span class="MJXp-mn" id="MJXp-Span-1415">20</span><span class="MJXp-mo" id="MJXp-Span-1416" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-1417">20</span><span class="MJXp-mo" id="MJXp-Span-1418" style="margin-left: 0em; margin-right: 0em;">)</span></span><span class="MJXp-mo" id="MJXp-Span-1419" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mstyle" id="MJXp-Span-1420" style="color: blue;"><span class="MJXp-mrow" id="MJXp-Span-1421"><span class="MJXp-mn" id="MJXp-Span-1422">70</span></span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-171">6. d_33 = c_33 - (u_3 + v_3) = 70 - (20 -20) = color{blue}{70} </script><br><br>
        <table border="1" cellspacing="0" cellpadding="6" style="border-collapse:collapse;">
            <tbody>
                <tr align="left">
                    <td nowrap=""> </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-172-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1423"><span class="MJXp-mstyle" id="MJXp-Span-1424"><span class="MJXp-msub" id="MJXp-Span-1425"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1426" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1427" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-172">D_1</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-173-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1428"><span class="MJXp-mstyle" id="MJXp-Span-1429"><span class="MJXp-msub" id="MJXp-Span-1430"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1431" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1432" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-173">D_2</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-174-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1433"><span class="MJXp-mstyle" id="MJXp-Span-1434"><span class="MJXp-msub" id="MJXp-Span-1435"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1436" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1437" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-174">D_3</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-175-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1438"><span class="MJXp-mstyle" id="MJXp-Span-1439"><span class="MJXp-msub" id="MJXp-Span-1440"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1441" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1442" style="vertical-align: -0.4em;">4</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-175">D_4</script>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">Supply</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-176-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1443"><span class="MJXp-mstyle" id="MJXp-Span-1444"><span class="MJXp-msub" id="MJXp-Span-1445"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1446" style="margin-right: 0.05em;">u</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-1447" style="vertical-align: -0.4em;">i</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-176">u_i</script>
                    </td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-177-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1448"><span class="MJXp-mstyle" id="MJXp-Span-1449"><span class="MJXp-msub" id="MJXp-Span-1450"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1451" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1452" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-177">S_1</script>
                    </td>
                    <td nowrap="">19 <font color="red"><b>(5)</b></font>
                    </td>
                    <td nowrap="">30 <font color="blue">[32]</font>
                    </td>
                    <td nowrap="">50 <font color="blue">[60]</font>
                    </td>
                    <td nowrap="">10 <font color="red"><b>(2)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">7</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-178-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1453"><span class="MJXp-mstyle" id="MJXp-Span-1454"><span class="MJXp-msub" id="MJXp-Span-1455"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1456" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1457" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-1458" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-1459">10</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-178">u_1=10</script>
                    </td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-179-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1460"><span class="MJXp-mstyle" id="MJXp-Span-1461"><span class="MJXp-msub" id="MJXp-Span-1462"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1463" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1464" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-179">S_2</script>
                    </td>
                    <td nowrap="">70 <font color="blue">[1]</font>
                    </td>
                    <td nowrap="">30 <font color="blue">[-18]</font>
                    </td>
                    <td nowrap="">40 <font color="red"><b>(7)</b></font>
                    </td>
                    <td nowrap="">60 <font color="red"><b>(2)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">9</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-180-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1465"><span class="MJXp-mstyle" id="MJXp-Span-1466"><span class="MJXp-msub" id="MJXp-Span-1467"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1468" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1469" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-1470" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-1471">60</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-180">u_2=60</script>
                    </td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-181-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1472"><span class="MJXp-mstyle" id="MJXp-Span-1473"><span class="MJXp-msub" id="MJXp-Span-1474"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1475" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1476" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-181">S_3</script>
                    </td>
                    <td nowrap="">40 <font color="blue">[11]</font>
                    </td>
                    <td nowrap="">8 <font color="red"><b>(8)</b></font>
                    </td>
                    <td nowrap="">70 <font color="blue">[70]</font>
                    </td>
                    <td nowrap="">20 <font color="red"><b>(10)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">18</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-182-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1477"><span class="MJXp-mstyle" id="MJXp-Span-1478"><span class="MJXp-msub" id="MJXp-Span-1479"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1480" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1481" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-1482" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-1483">20</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-182">u_3=20</script>
                    </td>
                </tr>
                <tr align="left">
                    <td nowrap="" style="padding: 1px;" colspan="8"> </td>
                </tr>
                <tr align="left">
                    <td nowrap="">Demand</td>
                    <td nowrap="">5</td>
                    <td nowrap="">8</td>
                    <td nowrap="">7</td>
                    <td nowrap="">14</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap=""></td>
                    <td nowrap=""></td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-183-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1484"><span class="MJXp-mstyle" id="MJXp-Span-1485"><span class="MJXp-msub" id="MJXp-Span-1486"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1487" style="margin-right: 0.05em;">v</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-1488" style="vertical-align: -0.4em;">j</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-183">v_j</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-184-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1489"><span class="MJXp-mstyle" id="MJXp-Span-1490"><span class="MJXp-msub" id="MJXp-Span-1491"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1492" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1493" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-1494" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-1495">9</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-184">v_1=9</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-185-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1496"><span class="MJXp-mstyle" id="MJXp-Span-1497"><span class="MJXp-msub" id="MJXp-Span-1498"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1499" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1500" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-1501" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mo" id="MJXp-Span-1502" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-1503">12</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-185">v_2=-12</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-186-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1504"><span class="MJXp-mstyle" id="MJXp-Span-1505"><span class="MJXp-msub" id="MJXp-Span-1506"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1507" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1508" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-1509" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mo" id="MJXp-Span-1510" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-1511">20</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-186">v_3=-20</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-187-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1512"><span class="MJXp-mstyle" id="MJXp-Span-1513"><span class="MJXp-msub" id="MJXp-Span-1514"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1515" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1516" style="vertical-align: -0.4em;">4</span></span><span class="MJXp-mo" id="MJXp-Span-1517" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-1518">0</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-187">v_4=0</script>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap=""></td>
                    <td nowrap=""></td>
                </tr>
            </tbody>
        </table><br><br><b>3.</b> Now choose the minimum negative value from all <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-188-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1519"><span class="MJXp-mstyle" id="MJXp-Span-1520"><span class="MJXp-msub" id="MJXp-Span-1521"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1522" style="margin-right: 0.05em;">d</span><span class="MJXp-mrow MJXp-script" id="MJXp-Span-1523" style="vertical-align: -0.4em;"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1524">i</span><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1525">j</span></span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-188">d_(ij)</script> (opportunity cost) = <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-189-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1526"><span class="MJXp-mstyle" id="MJXp-Span-1527"><span class="MJXp-msub" id="MJXp-Span-1528"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1529" style="margin-right: 0.05em;">d</span><span class="MJXp-mrow MJXp-script" id="MJXp-Span-1530" style="vertical-align: -0.4em;"><span class="MJXp-mn" id="MJXp-Span-1531">22</span></span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-189">d_(22</script> = <font color="blue">[-18]</font> <br><br>and draw a closed path from <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-190-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1532"><span class="MJXp-mstyle" id="MJXp-Span-1533"><span class="MJXp-msub" id="MJXp-Span-1534"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1535" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1536" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-msub" id="MJXp-Span-1537"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1538" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1539" style="vertical-align: -0.4em;">2</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-190">S_2D_2</script>.<br><br>Closed path is <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-191-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1540"><span class="MJXp-mstyle" id="MJXp-Span-1541"><span class="MJXp-msub" id="MJXp-Span-1542"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1543" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1544" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-msub" id="MJXp-Span-1545"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1546" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1547" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-1548" style="margin-left: 0.333em; margin-right: 0.333em;">→</span><span class="MJXp-msub" id="MJXp-Span-1549"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1550" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1551" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-msub" id="MJXp-Span-1552"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1553" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1554" style="vertical-align: -0.4em;">4</span></span><span class="MJXp-mo" id="MJXp-Span-1555" style="margin-left: 0.333em; margin-right: 0.333em;">→</span><span class="MJXp-msub" id="MJXp-Span-1556"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1557" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1558" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-msub" id="MJXp-Span-1559"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1560" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1561" style="vertical-align: -0.4em;">4</span></span><span class="MJXp-mo" id="MJXp-Span-1562" style="margin-left: 0.333em; margin-right: 0.333em;">→</span><span class="MJXp-msub" id="MJXp-Span-1563"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1564" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1565" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-msub" id="MJXp-Span-1566"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1567" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1568" style="vertical-align: -0.4em;">2</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-191">S_2D_2->S_2D_4->S_3D_4->S_3D_2</script><br><br>Closed path and plus/minus sign allocation...<br>
        <table border="1" cellspacing="0" cellpadding="6" style="border-collapse:collapse;">
            <tbody>
                <tr align="left">
                    <td nowrap=""> </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-192-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1569"><span class="MJXp-mstyle" id="MJXp-Span-1570"><span class="MJXp-msub" id="MJXp-Span-1571"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1572" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1573" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-192">D_1</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-193-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1574"><span class="MJXp-mstyle" id="MJXp-Span-1575"><span class="MJXp-msub" id="MJXp-Span-1576"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1577" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1578" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-193">D_2</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-194-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1579"><span class="MJXp-mstyle" id="MJXp-Span-1580"><span class="MJXp-msub" id="MJXp-Span-1581"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1582" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1583" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-194">D_3</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-195-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1584"><span class="MJXp-mstyle" id="MJXp-Span-1585"><span class="MJXp-msub" id="MJXp-Span-1586"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1587" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1588" style="vertical-align: -0.4em;">4</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-195">D_4</script>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">Supply</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-196-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1589"><span class="MJXp-mstyle" id="MJXp-Span-1590"><span class="MJXp-msub" id="MJXp-Span-1591"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1592" style="margin-right: 0.05em;">u</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-1593" style="vertical-align: -0.4em;">i</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-196">u_i</script>
                    </td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-197-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1594"><span class="MJXp-mstyle" id="MJXp-Span-1595"><span class="MJXp-msub" id="MJXp-Span-1596"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1597" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1598" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-197">S_1</script>
                    </td>
                    <td nowrap="">19 <font color="red"><b>(5)</b></font>
                    </td>
                    <td nowrap="">30 <font color="blue">[32]</font>
                    </td>
                    <td nowrap="">50 <font color="blue">[60]</font>
                    </td>
                    <td nowrap="">10 <font color="red"><b>(2)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">7</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-198-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1599"><span class="MJXp-mstyle" id="MJXp-Span-1600"><span class="MJXp-msub" id="MJXp-Span-1601"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1602" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1603" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-1604" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-1605">10</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-198">u_1=10</script>
                    </td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-199-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1606"><span class="MJXp-mstyle" id="MJXp-Span-1607"><span class="MJXp-msub" id="MJXp-Span-1608"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1609" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1610" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-199">S_2</script>
                    </td>
                    <td nowrap="">70 <font color="blue">[1]</font>
                    </td>
                    <td nowrap="">30 <font color="blue">[-18]</font>
                        <font color="green"><b>(+)</b></font>
                    </td>
                    <td nowrap="">40 <font color="red"><b>(7)</b></font>
                    </td>
                    <td nowrap="">60 <font color="red"><b>(2)</b></font>
                        <font color="green"><b>(-)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">9</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-200-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1611"><span class="MJXp-mstyle" id="MJXp-Span-1612"><span class="MJXp-msub" id="MJXp-Span-1613"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1614" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1615" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-1616" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-1617">60</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-200">u_2=60</script>
                    </td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-201-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1618"><span class="MJXp-mstyle" id="MJXp-Span-1619"><span class="MJXp-msub" id="MJXp-Span-1620"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1621" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1622" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-201">S_3</script>
                    </td>
                    <td nowrap="">40 <font color="blue">[11]</font>
                    </td>
                    <td nowrap="">8 <font color="red"><b>(8)</b></font>
                        <font color="green"><b>(-)</b></font>
                    </td>
                    <td nowrap="">70 <font color="blue">[70]</font>
                    </td>
                    <td nowrap="">20 <font color="red"><b>(10)</b></font>
                        <font color="green"><b>(+)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">18</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-202-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1623"><span class="MJXp-mstyle" id="MJXp-Span-1624"><span class="MJXp-msub" id="MJXp-Span-1625"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1626" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1627" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-1628" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-1629">20</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-202">u_3=20</script>
                    </td>
                </tr>
                <tr align="left">
                    <td nowrap="" style="padding: 1px;" colspan="8"> </td>
                </tr>
                <tr align="left">
                    <td nowrap="">Demand</td>
                    <td nowrap="">5</td>
                    <td nowrap="">8</td>
                    <td nowrap="">7</td>
                    <td nowrap="">14</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap=""></td>
                    <td nowrap=""></td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-203-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1630"><span class="MJXp-mstyle" id="MJXp-Span-1631"><span class="MJXp-msub" id="MJXp-Span-1632"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1633" style="margin-right: 0.05em;">v</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-1634" style="vertical-align: -0.4em;">j</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-203">v_j</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-204-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1635"><span class="MJXp-mstyle" id="MJXp-Span-1636"><span class="MJXp-msub" id="MJXp-Span-1637"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1638" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1639" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-1640" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-1641">9</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-204">v_1=9</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-205-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1642"><span class="MJXp-mstyle" id="MJXp-Span-1643"><span class="MJXp-msub" id="MJXp-Span-1644"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1645" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1646" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-1647" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mo" id="MJXp-Span-1648" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-1649">12</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-205">v_2=-12</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-206-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1650"><span class="MJXp-mstyle" id="MJXp-Span-1651"><span class="MJXp-msub" id="MJXp-Span-1652"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1653" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1654" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-1655" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mo" id="MJXp-Span-1656" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-1657">20</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-206">v_3=-20</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-207-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1658"><span class="MJXp-mstyle" id="MJXp-Span-1659"><span class="MJXp-msub" id="MJXp-Span-1660"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1661" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1662" style="vertical-align: -0.4em;">4</span></span><span class="MJXp-mo" id="MJXp-Span-1663" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-1664">0</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-207">v_4=0</script>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap=""></td>
                    <td nowrap=""></td>
                </tr>
            </tbody>
        </table><br><br><b>4.</b> Minimum allocated value among all negative position <font color="green"><b>(-)</b></font> on closed path = 2<br>Substract 2 from all <font color="green"><b>(-)</b></font> and Add it to all <font color="green"><b>(+)</b></font><br>
        <table border="1" cellspacing="0" cellpadding="6" style="border-collapse:collapse;">
            <tbody>
                <tr align="left">
                    <td nowrap=""> </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-208-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1665"><span class="MJXp-mstyle" id="MJXp-Span-1666"><span class="MJXp-msub" id="MJXp-Span-1667"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1668" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1669" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-208">D_1</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-209-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1670"><span class="MJXp-mstyle" id="MJXp-Span-1671"><span class="MJXp-msub" id="MJXp-Span-1672"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1673" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1674" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-209">D_2</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-210-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1675"><span class="MJXp-mstyle" id="MJXp-Span-1676"><span class="MJXp-msub" id="MJXp-Span-1677"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1678" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1679" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-210">D_3</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-211-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1680"><span class="MJXp-mstyle" id="MJXp-Span-1681"><span class="MJXp-msub" id="MJXp-Span-1682"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1683" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1684" style="vertical-align: -0.4em;">4</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-211">D_4</script>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">Supply</td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-212-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1685"><span class="MJXp-mstyle" id="MJXp-Span-1686"><span class="MJXp-msub" id="MJXp-Span-1687"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1688" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1689" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-212">S_1</script>
                    </td>
                    <td nowrap="">19 <font color="red"><b>(5)</b></font>
                    </td>
                    <td nowrap="">30 </td>
                    <td nowrap="">50 </td>
                    <td nowrap="">10 <font color="red"><b>(2)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">7</td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-213-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1690"><span class="MJXp-mstyle" id="MJXp-Span-1691"><span class="MJXp-msub" id="MJXp-Span-1692"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1693" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1694" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-213">S_2</script>
                    </td>
                    <td nowrap="">70 </td>
                    <td nowrap="">30 <font color="red"><b>(2)</b></font>
                    </td>
                    <td nowrap="">40 <font color="red"><b>(7)</b></font>
                    </td>
                    <td nowrap="">60 </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">9</td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-214-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1695"><span class="MJXp-mstyle" id="MJXp-Span-1696"><span class="MJXp-msub" id="MJXp-Span-1697"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1698" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1699" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-214">S_3</script>
                    </td>
                    <td nowrap="">40 </td>
                    <td nowrap="">8 <font color="red"><b>(6)</b></font>
                    </td>
                    <td nowrap="">70 </td>
                    <td nowrap="">20 <font color="red"><b>(12)</b></font>
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
        </table><br><br><b>5.</b> Repeat the step 1 to 4, until an optimal solution is obtained.<br>
        <hr><br>Iteration-2 of optimality test<br><b>1.</b> Find <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-215-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1700"><span class="MJXp-mstyle" id="MJXp-Span-1701"><span class="MJXp-msub" id="MJXp-Span-1702"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1703" style="margin-right: 0.05em;">u</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-1704" style="vertical-align: -0.4em;">i</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-215">u_i</script> and <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-216-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1705"><span class="MJXp-mstyle" id="MJXp-Span-1706"><span class="MJXp-msub" id="MJXp-Span-1707"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1708" style="margin-right: 0.05em;">v</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-1709" style="vertical-align: -0.4em;">j</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-216">v_j</script> for all occupied cells(i,j), where <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-217-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1710"><span class="MJXp-mstyle" id="MJXp-Span-1711"><span class="MJXp-msub" id="MJXp-Span-1712"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1713" style="margin-right: 0.05em;">c</span><span class="MJXp-mrow MJXp-script" id="MJXp-Span-1714" style="vertical-align: -0.4em;"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1715">i</span><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1716">j</span></span></span><span class="MJXp-mo" id="MJXp-Span-1717" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-1718"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1719" style="margin-right: 0.05em;">u</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-1720" style="vertical-align: -0.4em;">i</span></span><span class="MJXp-mo" id="MJXp-Span-1721" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-msub" id="MJXp-Span-1722"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1723" style="margin-right: 0.05em;">v</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-1724" style="vertical-align: -0.4em;">j</span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-217">c_(ij) = u_i + v_j</script><br><br><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-218-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1725"><span class="MJXp-mstyle" id="MJXp-Span-1726"><span class="MJXp-mn" id="MJXp-Span-1727">1</span><span class="MJXp-mo" id="MJXp-Span-1728" style="margin-left: 0em; margin-right: 0.222em;">.</span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-218">1.</script> Substituting, <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-219-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1729"><span class="MJXp-mstyle" id="MJXp-Span-1730"><span class="MJXp-msub" id="MJXp-Span-1731"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1732" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1733" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-1734" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-1735">0</span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-219">u_1 = 0</script>, we get<br><br><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-220-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1736"><span class="MJXp-mstyle" id="MJXp-Span-1737"><span class="MJXp-mn" id="MJXp-Span-1738">2</span><span class="MJXp-mo" id="MJXp-Span-1739" style="margin-left: 0em; margin-right: 0.222em;">.</span><span class="MJXp-msub" id="MJXp-Span-1740"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1741" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1742" style="vertical-align: -0.4em;">11</span></span><span class="MJXp-mo" id="MJXp-Span-1743" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-1744"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1745" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1746" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-1747" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-msub" id="MJXp-Span-1748"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1749" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1750" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-1751" style="margin-left: 0.333em; margin-right: 0.333em;">⇒</span><span class="MJXp-msub" id="MJXp-Span-1752"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1753" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1754" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-1755" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-1756"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1757" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1758" style="vertical-align: -0.4em;">11</span></span><span class="MJXp-mo" id="MJXp-Span-1759" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-msub" id="MJXp-Span-1760"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1761" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1762" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-1763" style="margin-left: 0.333em; margin-right: 0.333em;">⇒</span><span class="MJXp-msub" id="MJXp-Span-1764"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1765" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1766" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-1767" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-1768">19</span><span class="MJXp-mo" id="MJXp-Span-1769" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-1770">0</span><span class="MJXp-mo" id="MJXp-Span-1771" style="margin-left: 0.333em; margin-right: 0.333em;">⇒</span><span class="MJXp-msub" id="MJXp-Span-1772"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1773" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1774" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-1775" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-1776">19</span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-220">2. c_11 = u_1 + v_1=>v_1 = c_11 - u_1=>v_1 = 19 -0=>v_1 = 19</script><br><br><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-221-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1777"><span class="MJXp-mstyle" id="MJXp-Span-1778"><span class="MJXp-mn" id="MJXp-Span-1779">3</span><span class="MJXp-mo" id="MJXp-Span-1780" style="margin-left: 0em; margin-right: 0.222em;">.</span><span class="MJXp-msub" id="MJXp-Span-1781"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1782" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1783" style="vertical-align: -0.4em;">14</span></span><span class="MJXp-mo" id="MJXp-Span-1784" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-1785"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1786" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1787" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-1788" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-msub" id="MJXp-Span-1789"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1790" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1791" style="vertical-align: -0.4em;">4</span></span><span class="MJXp-mo" id="MJXp-Span-1792" style="margin-left: 0.333em; margin-right: 0.333em;">⇒</span><span class="MJXp-msub" id="MJXp-Span-1793"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1794" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1795" style="vertical-align: -0.4em;">4</span></span><span class="MJXp-mo" id="MJXp-Span-1796" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-1797"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1798" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1799" style="vertical-align: -0.4em;">14</span></span><span class="MJXp-mo" id="MJXp-Span-1800" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-msub" id="MJXp-Span-1801"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1802" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1803" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-1804" style="margin-left: 0.333em; margin-right: 0.333em;">⇒</span><span class="MJXp-msub" id="MJXp-Span-1805"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1806" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1807" style="vertical-align: -0.4em;">4</span></span><span class="MJXp-mo" id="MJXp-Span-1808" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-1809">10</span><span class="MJXp-mo" id="MJXp-Span-1810" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-1811">0</span><span class="MJXp-mo" id="MJXp-Span-1812" style="margin-left: 0.333em; margin-right: 0.333em;">⇒</span><span class="MJXp-msub" id="MJXp-Span-1813"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1814" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1815" style="vertical-align: -0.4em;">4</span></span><span class="MJXp-mo" id="MJXp-Span-1816" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-1817">10</span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-221">3. c_14 = u_1 + v_4=>v_4 = c_14 - u_1=>v_4 = 10 -0=>v_4 = 10</script><br><br><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-222-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1818"><span class="MJXp-mstyle" id="MJXp-Span-1819"><span class="MJXp-mn" id="MJXp-Span-1820">4</span><span class="MJXp-mo" id="MJXp-Span-1821" style="margin-left: 0em; margin-right: 0.222em;">.</span><span class="MJXp-msub" id="MJXp-Span-1822"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1823" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1824" style="vertical-align: -0.4em;">34</span></span><span class="MJXp-mo" id="MJXp-Span-1825" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-1826"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1827" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1828" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-1829" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-msub" id="MJXp-Span-1830"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1831" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1832" style="vertical-align: -0.4em;">4</span></span><span class="MJXp-mo" id="MJXp-Span-1833" style="margin-left: 0.333em; margin-right: 0.333em;">⇒</span><span class="MJXp-msub" id="MJXp-Span-1834"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1835" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1836" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-1837" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-1838"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1839" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1840" style="vertical-align: -0.4em;">34</span></span><span class="MJXp-mo" id="MJXp-Span-1841" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-msub" id="MJXp-Span-1842"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1843" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1844" style="vertical-align: -0.4em;">4</span></span><span class="MJXp-mo" id="MJXp-Span-1845" style="margin-left: 0.333em; margin-right: 0.333em;">⇒</span><span class="MJXp-msub" id="MJXp-Span-1846"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1847" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1848" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-1849" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-1850">20</span><span class="MJXp-mo" id="MJXp-Span-1851" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-1852">10</span><span class="MJXp-mo" id="MJXp-Span-1853" style="margin-left: 0.333em; margin-right: 0.333em;">⇒</span><span class="MJXp-msub" id="MJXp-Span-1854"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1855" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1856" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-1857" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-1858">10</span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-222">4. c_34 = u_3 + v_4=>u_3 = c_34 - v_4=>u_3 = 20 -10=>u_3 = 10</script><br><br><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-223-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1859"><span class="MJXp-mstyle" id="MJXp-Span-1860"><span class="MJXp-mn" id="MJXp-Span-1861">5</span><span class="MJXp-mo" id="MJXp-Span-1862" style="margin-left: 0em; margin-right: 0.222em;">.</span><span class="MJXp-msub" id="MJXp-Span-1863"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1864" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1865" style="vertical-align: -0.4em;">32</span></span><span class="MJXp-mo" id="MJXp-Span-1866" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-1867"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1868" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1869" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-1870" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-msub" id="MJXp-Span-1871"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1872" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1873" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-1874" style="margin-left: 0.333em; margin-right: 0.333em;">⇒</span><span class="MJXp-msub" id="MJXp-Span-1875"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1876" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1877" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-1878" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-1879"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1880" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1881" style="vertical-align: -0.4em;">32</span></span><span class="MJXp-mo" id="MJXp-Span-1882" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-msub" id="MJXp-Span-1883"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1884" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1885" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-1886" style="margin-left: 0.333em; margin-right: 0.333em;">⇒</span><span class="MJXp-msub" id="MJXp-Span-1887"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1888" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1889" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-1890" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-1891">8</span><span class="MJXp-mo" id="MJXp-Span-1892" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-1893">10</span><span class="MJXp-mo" id="MJXp-Span-1894" style="margin-left: 0.333em; margin-right: 0.333em;">⇒</span><span class="MJXp-msub" id="MJXp-Span-1895"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1896" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1897" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-1898" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mo" id="MJXp-Span-1899" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-1900">2</span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-223">5. c_32 = u_3 + v_2=>v_2 = c_32 - u_3=>v_2 = 8 -10=>v_2 = -2</script><br><br><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-224-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1901"><span class="MJXp-mstyle" id="MJXp-Span-1902"><span class="MJXp-mn" id="MJXp-Span-1903">6</span><span class="MJXp-mo" id="MJXp-Span-1904" style="margin-left: 0em; margin-right: 0.222em;">.</span><span class="MJXp-msub" id="MJXp-Span-1905"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1906" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1907" style="vertical-align: -0.4em;">22</span></span><span class="MJXp-mo" id="MJXp-Span-1908" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-1909"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1910" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1911" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-1912" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-msub" id="MJXp-Span-1913"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1914" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1915" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-1916" style="margin-left: 0.333em; margin-right: 0.333em;">⇒</span><span class="MJXp-msub" id="MJXp-Span-1917"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1918" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1919" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-1920" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-1921"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1922" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1923" style="vertical-align: -0.4em;">22</span></span><span class="MJXp-mo" id="MJXp-Span-1924" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-msub" id="MJXp-Span-1925"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1926" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1927" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-1928" style="margin-left: 0.333em; margin-right: 0.333em;">⇒</span><span class="MJXp-msub" id="MJXp-Span-1929"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1930" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1931" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-1932" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-1933">30</span><span class="MJXp-mo" id="MJXp-Span-1934" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-mn" id="MJXp-Span-1935">2</span><span class="MJXp-mo" id="MJXp-Span-1936" style="margin-left: 0.333em; margin-right: 0.333em;">⇒</span><span class="MJXp-msub" id="MJXp-Span-1937"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1938" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1939" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-1940" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-1941">32</span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-224">6. c_22 = u_2 + v_2=>u_2 = c_22 - v_2=>u_2 = 30 +2=>u_2 = 32</script><br><br><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-225-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1942"><span class="MJXp-mstyle" id="MJXp-Span-1943"><span class="MJXp-mn" id="MJXp-Span-1944">7</span><span class="MJXp-mo" id="MJXp-Span-1945" style="margin-left: 0em; margin-right: 0.222em;">.</span><span class="MJXp-msub" id="MJXp-Span-1946"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1947" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1948" style="vertical-align: -0.4em;">23</span></span><span class="MJXp-mo" id="MJXp-Span-1949" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-1950"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1951" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1952" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-1953" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-msub" id="MJXp-Span-1954"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1955" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1956" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-1957" style="margin-left: 0.333em; margin-right: 0.333em;">⇒</span><span class="MJXp-msub" id="MJXp-Span-1958"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1959" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1960" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-1961" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-1962"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1963" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1964" style="vertical-align: -0.4em;">23</span></span><span class="MJXp-mo" id="MJXp-Span-1965" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-msub" id="MJXp-Span-1966"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1967" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1968" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-1969" style="margin-left: 0.333em; margin-right: 0.333em;">⇒</span><span class="MJXp-msub" id="MJXp-Span-1970"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1971" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1972" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-1973" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-1974">40</span><span class="MJXp-mo" id="MJXp-Span-1975" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-1976">32</span><span class="MJXp-mo" id="MJXp-Span-1977" style="margin-left: 0.333em; margin-right: 0.333em;">⇒</span><span class="MJXp-msub" id="MJXp-Span-1978"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1979" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1980" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-1981" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-1982">8</span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-225">7. c_23 = u_2 + v_3=>v_3 = c_23 - u_2=>v_3 = 40 -32=>v_3 = 8</script><br><br>
        <table border="1" cellspacing="0" cellpadding="6" style="border-collapse:collapse;">
            <tbody>
                <tr align="left">
                    <td nowrap=""> </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-226-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1983"><span class="MJXp-mstyle" id="MJXp-Span-1984"><span class="MJXp-msub" id="MJXp-Span-1985"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1986" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1987" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-226">D_1</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-227-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1988"><span class="MJXp-mstyle" id="MJXp-Span-1989"><span class="MJXp-msub" id="MJXp-Span-1990"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1991" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1992" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-227">D_2</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-228-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1993"><span class="MJXp-mstyle" id="MJXp-Span-1994"><span class="MJXp-msub" id="MJXp-Span-1995"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-1996" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-1997" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-228">D_3</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-229-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-1998"><span class="MJXp-mstyle" id="MJXp-Span-1999"><span class="MJXp-msub" id="MJXp-Span-2000"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2001" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2002" style="vertical-align: -0.4em;">4</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-229">D_4</script>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">Supply</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-230-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2003"><span class="MJXp-mstyle" id="MJXp-Span-2004"><span class="MJXp-msub" id="MJXp-Span-2005"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2006" style="margin-right: 0.05em;">u</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-2007" style="vertical-align: -0.4em;">i</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-230">u_i</script>
                    </td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-231-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2008"><span class="MJXp-mstyle" id="MJXp-Span-2009"><span class="MJXp-msub" id="MJXp-Span-2010"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2011" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2012" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-231">S_1</script>
                    </td>
                    <td nowrap="">19 <font color="red"><b>(5)</b></font>
                    </td>
                    <td nowrap="">30 </td>
                    <td nowrap="">50 </td>
                    <td nowrap="">10 <font color="red"><b>(2)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">7</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-232-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2013"><span class="MJXp-mstyle" id="MJXp-Span-2014"><span class="MJXp-msub" id="MJXp-Span-2015"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2016" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2017" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-2018" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-2019">0</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-232">u_1=0</script>
                    </td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-233-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2020"><span class="MJXp-mstyle" id="MJXp-Span-2021"><span class="MJXp-msub" id="MJXp-Span-2022"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2023" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2024" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-233">S_2</script>
                    </td>
                    <td nowrap="">70 </td>
                    <td nowrap="">30 <font color="red"><b>(2)</b></font>
                    </td>
                    <td nowrap="">40 <font color="red"><b>(7)</b></font>
                    </td>
                    <td nowrap="">60 </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">9</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-234-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2025"><span class="MJXp-mstyle" id="MJXp-Span-2026"><span class="MJXp-msub" id="MJXp-Span-2027"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2028" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2029" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-2030" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-2031">32</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-234">u_2=32</script>
                    </td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-235-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2032"><span class="MJXp-mstyle" id="MJXp-Span-2033"><span class="MJXp-msub" id="MJXp-Span-2034"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2035" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2036" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-235">S_3</script>
                    </td>
                    <td nowrap="">40 </td>
                    <td nowrap="">8 <font color="red"><b>(6)</b></font>
                    </td>
                    <td nowrap="">70 </td>
                    <td nowrap="">20 <font color="red"><b>(12)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">18</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-236-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2037"><span class="MJXp-mstyle" id="MJXp-Span-2038"><span class="MJXp-msub" id="MJXp-Span-2039"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2040" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2041" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-2042" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-2043">10</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-236">u_3=10</script>
                    </td>
                </tr>
                <tr align="left">
                    <td nowrap="" style="padding: 1px;" colspan="8"> </td>
                </tr>
                <tr align="left">
                    <td nowrap="">Demand</td>
                    <td nowrap="">5</td>
                    <td nowrap="">8</td>
                    <td nowrap="">7</td>
                    <td nowrap="">14</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap=""></td>
                    <td nowrap=""></td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-237-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2044"><span class="MJXp-mstyle" id="MJXp-Span-2045"><span class="MJXp-msub" id="MJXp-Span-2046"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2047" style="margin-right: 0.05em;">v</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-2048" style="vertical-align: -0.4em;">j</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-237">v_j</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-238-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2049"><span class="MJXp-mstyle" id="MJXp-Span-2050"><span class="MJXp-msub" id="MJXp-Span-2051"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2052" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2053" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-2054" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-2055">19</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-238">v_1=19</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-239-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2056"><span class="MJXp-mstyle" id="MJXp-Span-2057"><span class="MJXp-msub" id="MJXp-Span-2058"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2059" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2060" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-2061" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mo" id="MJXp-Span-2062" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-2063">2</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-239">v_2=-2</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-240-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2064"><span class="MJXp-mstyle" id="MJXp-Span-2065"><span class="MJXp-msub" id="MJXp-Span-2066"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2067" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2068" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-2069" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-2070">8</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-240">v_3=8</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-241-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2071"><span class="MJXp-mstyle" id="MJXp-Span-2072"><span class="MJXp-msub" id="MJXp-Span-2073"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2074" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2075" style="vertical-align: -0.4em;">4</span></span><span class="MJXp-mo" id="MJXp-Span-2076" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-2077">10</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-241">v_4=10</script>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap=""></td>
                    <td nowrap=""></td>
                </tr>
            </tbody>
        </table><br><br>
        <font color="blue"><b>2.</b> Find <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-242-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2078"><span class="MJXp-mstyle" id="MJXp-Span-2079"><span class="MJXp-msub" id="MJXp-Span-2080"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2081" style="margin-right: 0.05em;">d</span><span class="MJXp-mrow MJXp-script" id="MJXp-Span-2082" style="vertical-align: -0.4em;"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2083">i</span><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2084">j</span></span></span></span></span></span>
            <script type="math/asciimath" id="MathJax-Element-242">d_(ij)</script> for all unoccupied cells(i,j), where <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-243-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2085"><span class="MJXp-mstyle" id="MJXp-Span-2086"><span class="MJXp-msub" id="MJXp-Span-2087"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2088" style="margin-right: 0.05em;">d</span><span class="MJXp-mrow MJXp-script" id="MJXp-Span-2089" style="vertical-align: -0.4em;"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2090">i</span><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2091">j</span></span></span><span class="MJXp-mo" id="MJXp-Span-2092" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-2093"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2094" style="margin-right: 0.05em;">c</span><span class="MJXp-mrow MJXp-script" id="MJXp-Span-2095" style="vertical-align: -0.4em;"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2096">i</span><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2097">j</span></span></span><span class="MJXp-mo" id="MJXp-Span-2098" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mrow" id="MJXp-Span-2099"><span class="MJXp-mo" id="MJXp-Span-2100" style="margin-left: 0em; margin-right: 0em; vertical-align: -0.244em;"><span class="MJXp-right MJXp-scale7" style="font-size: 1.978em; margin-left: -0.05em;">(</span></span><span class="MJXp-msub" id="MJXp-Span-2101"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2102" style="margin-right: 0.05em;">u</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-2103" style="vertical-align: -0.4em;">i</span></span><span class="MJXp-mo" id="MJXp-Span-2104" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-msub" id="MJXp-Span-2105"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2106" style="margin-right: 0.05em;">v</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-2107" style="vertical-align: -0.4em;">j</span></span><span class="MJXp-mo" id="MJXp-Span-2108" style="margin-left: 0em; margin-right: 0em; vertical-align: -0.244em;"><span class="MJXp-right MJXp-scale7" style="font-size: 1.978em; margin-left: -0.05em;">)</span></span></span></span></span></span>
            <script type="math/asciimath" id="MathJax-Element-243">d_(ij) = c_(ij) - (u_i + v_j)</script>
        </font><br><br><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-244-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2109"><span class="MJXp-mstyle" id="MJXp-Span-2110"><span class="MJXp-mn" id="MJXp-Span-2111">1</span><span class="MJXp-mo" id="MJXp-Span-2112" style="margin-left: 0em; margin-right: 0.222em;">.</span><span class="MJXp-msub" id="MJXp-Span-2113"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2114" style="margin-right: 0.05em;">d</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2115" style="vertical-align: -0.4em;">12</span></span><span class="MJXp-mo" id="MJXp-Span-2116" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-2117"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2118" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2119" style="vertical-align: -0.4em;">12</span></span><span class="MJXp-mo" id="MJXp-Span-2120" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mrow" id="MJXp-Span-2121"><span class="MJXp-mo" id="MJXp-Span-2122" style="margin-left: 0em; margin-right: 0em; vertical-align: -0.244em;"><span class="MJXp-right MJXp-scale7" style="font-size: 1.978em; margin-left: -0.05em;">(</span></span><span class="MJXp-msub" id="MJXp-Span-2123"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2124" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2125" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-2126" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-msub" id="MJXp-Span-2127"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2128" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2129" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-2130" style="margin-left: 0em; margin-right: 0em; vertical-align: -0.244em;"><span class="MJXp-right MJXp-scale7" style="font-size: 1.978em; margin-left: -0.05em;">)</span></span></span><span class="MJXp-mo" id="MJXp-Span-2131" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-2132">30</span><span class="MJXp-mo" id="MJXp-Span-2133" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mrow" id="MJXp-Span-2134"><span class="MJXp-mo" id="MJXp-Span-2135" style="margin-left: 0em; margin-right: 0em;">(</span><span class="MJXp-mn" id="MJXp-Span-2136">0</span><span class="MJXp-mo" id="MJXp-Span-2137" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-2138">2</span><span class="MJXp-mo" id="MJXp-Span-2139" style="margin-left: 0em; margin-right: 0em;">)</span></span><span class="MJXp-mo" id="MJXp-Span-2140" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mstyle" id="MJXp-Span-2141" style="color: blue;"><span class="MJXp-mrow" id="MJXp-Span-2142"><span class="MJXp-mn" id="MJXp-Span-2143">32</span></span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-244">1. d_12 = c_12 - (u_1 + v_2) = 30 - (0 -2) = color{blue}{32} </script><br><br><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-245-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2144"><span class="MJXp-mstyle" id="MJXp-Span-2145"><span class="MJXp-mn" id="MJXp-Span-2146">2</span><span class="MJXp-mo" id="MJXp-Span-2147" style="margin-left: 0em; margin-right: 0.222em;">.</span><span class="MJXp-msub" id="MJXp-Span-2148"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2149" style="margin-right: 0.05em;">d</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2150" style="vertical-align: -0.4em;">13</span></span><span class="MJXp-mo" id="MJXp-Span-2151" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-2152"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2153" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2154" style="vertical-align: -0.4em;">13</span></span><span class="MJXp-mo" id="MJXp-Span-2155" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mrow" id="MJXp-Span-2156"><span class="MJXp-mo" id="MJXp-Span-2157" style="margin-left: 0em; margin-right: 0em; vertical-align: -0.244em;"><span class="MJXp-right MJXp-scale7" style="font-size: 1.978em; margin-left: -0.05em;">(</span></span><span class="MJXp-msub" id="MJXp-Span-2158"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2159" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2160" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-2161" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-msub" id="MJXp-Span-2162"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2163" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2164" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-2165" style="margin-left: 0em; margin-right: 0em; vertical-align: -0.244em;"><span class="MJXp-right MJXp-scale7" style="font-size: 1.978em; margin-left: -0.05em;">)</span></span></span><span class="MJXp-mo" id="MJXp-Span-2166" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-2167">50</span><span class="MJXp-mo" id="MJXp-Span-2168" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mrow" id="MJXp-Span-2169"><span class="MJXp-mo" id="MJXp-Span-2170" style="margin-left: 0em; margin-right: 0em;">(</span><span class="MJXp-mn" id="MJXp-Span-2171">0</span><span class="MJXp-mo" id="MJXp-Span-2172" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-mn" id="MJXp-Span-2173">8</span><span class="MJXp-mo" id="MJXp-Span-2174" style="margin-left: 0em; margin-right: 0em;">)</span></span><span class="MJXp-mo" id="MJXp-Span-2175" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mstyle" id="MJXp-Span-2176" style="color: blue;"><span class="MJXp-mrow" id="MJXp-Span-2177"><span class="MJXp-mn" id="MJXp-Span-2178">42</span></span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-245">2. d_13 = c_13 - (u_1 + v_3) = 50 - (0 +8) = color{blue}{42} </script><br><br><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-246-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2179"><span class="MJXp-mstyle" id="MJXp-Span-2180"><span class="MJXp-mn" id="MJXp-Span-2181">3</span><span class="MJXp-mo" id="MJXp-Span-2182" style="margin-left: 0em; margin-right: 0.222em;">.</span><span class="MJXp-msub" id="MJXp-Span-2183"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2184" style="margin-right: 0.05em;">d</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2185" style="vertical-align: -0.4em;">21</span></span><span class="MJXp-mo" id="MJXp-Span-2186" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-2187"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2188" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2189" style="vertical-align: -0.4em;">21</span></span><span class="MJXp-mo" id="MJXp-Span-2190" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mrow" id="MJXp-Span-2191"><span class="MJXp-mo" id="MJXp-Span-2192" style="margin-left: 0em; margin-right: 0em; vertical-align: -0.244em;"><span class="MJXp-right MJXp-scale7" style="font-size: 1.978em; margin-left: -0.05em;">(</span></span><span class="MJXp-msub" id="MJXp-Span-2193"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2194" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2195" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-2196" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-msub" id="MJXp-Span-2197"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2198" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2199" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-2200" style="margin-left: 0em; margin-right: 0em; vertical-align: -0.244em;"><span class="MJXp-right MJXp-scale7" style="font-size: 1.978em; margin-left: -0.05em;">)</span></span></span><span class="MJXp-mo" id="MJXp-Span-2201" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-2202">70</span><span class="MJXp-mo" id="MJXp-Span-2203" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mrow" id="MJXp-Span-2204"><span class="MJXp-mo" id="MJXp-Span-2205" style="margin-left: 0em; margin-right: 0em;">(</span><span class="MJXp-mn" id="MJXp-Span-2206">32</span><span class="MJXp-mo" id="MJXp-Span-2207" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-mn" id="MJXp-Span-2208">19</span><span class="MJXp-mo" id="MJXp-Span-2209" style="margin-left: 0em; margin-right: 0em;">)</span></span><span class="MJXp-mo" id="MJXp-Span-2210" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mstyle" id="MJXp-Span-2211" style="color: blue;"><span class="MJXp-mrow" id="MJXp-Span-2212"><span class="MJXp-mn" id="MJXp-Span-2213">19</span></span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-246">3. d_21 = c_21 - (u_2 + v_1) = 70 - (32 +19) = color{blue}{19} </script><br><br><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-247-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2214"><span class="MJXp-mstyle" id="MJXp-Span-2215"><span class="MJXp-mn" id="MJXp-Span-2216">4</span><span class="MJXp-mo" id="MJXp-Span-2217" style="margin-left: 0em; margin-right: 0.222em;">.</span><span class="MJXp-msub" id="MJXp-Span-2218"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2219" style="margin-right: 0.05em;">d</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2220" style="vertical-align: -0.4em;">24</span></span><span class="MJXp-mo" id="MJXp-Span-2221" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-2222"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2223" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2224" style="vertical-align: -0.4em;">24</span></span><span class="MJXp-mo" id="MJXp-Span-2225" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mrow" id="MJXp-Span-2226"><span class="MJXp-mo" id="MJXp-Span-2227" style="margin-left: 0em; margin-right: 0em; vertical-align: -0.244em;"><span class="MJXp-right MJXp-scale7" style="font-size: 1.978em; margin-left: -0.05em;">(</span></span><span class="MJXp-msub" id="MJXp-Span-2228"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2229" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2230" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-2231" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-msub" id="MJXp-Span-2232"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2233" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2234" style="vertical-align: -0.4em;">4</span></span><span class="MJXp-mo" id="MJXp-Span-2235" style="margin-left: 0em; margin-right: 0em; vertical-align: -0.244em;"><span class="MJXp-right MJXp-scale7" style="font-size: 1.978em; margin-left: -0.05em;">)</span></span></span><span class="MJXp-mo" id="MJXp-Span-2236" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-2237">60</span><span class="MJXp-mo" id="MJXp-Span-2238" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mrow" id="MJXp-Span-2239"><span class="MJXp-mo" id="MJXp-Span-2240" style="margin-left: 0em; margin-right: 0em;">(</span><span class="MJXp-mn" id="MJXp-Span-2241">32</span><span class="MJXp-mo" id="MJXp-Span-2242" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-mn" id="MJXp-Span-2243">10</span><span class="MJXp-mo" id="MJXp-Span-2244" style="margin-left: 0em; margin-right: 0em;">)</span></span><span class="MJXp-mo" id="MJXp-Span-2245" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mstyle" id="MJXp-Span-2246" style="color: blue;"><span class="MJXp-mrow" id="MJXp-Span-2247"><span class="MJXp-mn" id="MJXp-Span-2248">18</span></span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-247">4. d_24 = c_24 - (u_2 + v_4) = 60 - (32 +10) = color{blue}{18} </script><br><br><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-248-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2249"><span class="MJXp-mstyle" id="MJXp-Span-2250"><span class="MJXp-mn" id="MJXp-Span-2251">5</span><span class="MJXp-mo" id="MJXp-Span-2252" style="margin-left: 0em; margin-right: 0.222em;">.</span><span class="MJXp-msub" id="MJXp-Span-2253"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2254" style="margin-right: 0.05em;">d</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2255" style="vertical-align: -0.4em;">31</span></span><span class="MJXp-mo" id="MJXp-Span-2256" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-2257"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2258" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2259" style="vertical-align: -0.4em;">31</span></span><span class="MJXp-mo" id="MJXp-Span-2260" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mrow" id="MJXp-Span-2261"><span class="MJXp-mo" id="MJXp-Span-2262" style="margin-left: 0em; margin-right: 0em; vertical-align: -0.244em;"><span class="MJXp-right MJXp-scale7" style="font-size: 1.978em; margin-left: -0.05em;">(</span></span><span class="MJXp-msub" id="MJXp-Span-2263"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2264" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2265" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-2266" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-msub" id="MJXp-Span-2267"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2268" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2269" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-2270" style="margin-left: 0em; margin-right: 0em; vertical-align: -0.244em;"><span class="MJXp-right MJXp-scale7" style="font-size: 1.978em; margin-left: -0.05em;">)</span></span></span><span class="MJXp-mo" id="MJXp-Span-2271" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-2272">40</span><span class="MJXp-mo" id="MJXp-Span-2273" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mrow" id="MJXp-Span-2274"><span class="MJXp-mo" id="MJXp-Span-2275" style="margin-left: 0em; margin-right: 0em;">(</span><span class="MJXp-mn" id="MJXp-Span-2276">10</span><span class="MJXp-mo" id="MJXp-Span-2277" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-mn" id="MJXp-Span-2278">19</span><span class="MJXp-mo" id="MJXp-Span-2279" style="margin-left: 0em; margin-right: 0em;">)</span></span><span class="MJXp-mo" id="MJXp-Span-2280" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mstyle" id="MJXp-Span-2281" style="color: blue;"><span class="MJXp-mrow" id="MJXp-Span-2282"><span class="MJXp-mn" id="MJXp-Span-2283">11</span></span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-248">5. d_31 = c_31 - (u_3 + v_1) = 40 - (10 +19) = color{blue}{11} </script><br><br><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-249-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2284"><span class="MJXp-mstyle" id="MJXp-Span-2285"><span class="MJXp-mn" id="MJXp-Span-2286">6</span><span class="MJXp-mo" id="MJXp-Span-2287" style="margin-left: 0em; margin-right: 0.222em;">.</span><span class="MJXp-msub" id="MJXp-Span-2288"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2289" style="margin-right: 0.05em;">d</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2290" style="vertical-align: -0.4em;">33</span></span><span class="MJXp-mo" id="MJXp-Span-2291" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-msub" id="MJXp-Span-2292"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2293" style="margin-right: 0.05em;">c</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2294" style="vertical-align: -0.4em;">33</span></span><span class="MJXp-mo" id="MJXp-Span-2295" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mrow" id="MJXp-Span-2296"><span class="MJXp-mo" id="MJXp-Span-2297" style="margin-left: 0em; margin-right: 0em; vertical-align: -0.244em;"><span class="MJXp-right MJXp-scale7" style="font-size: 1.978em; margin-left: -0.05em;">(</span></span><span class="MJXp-msub" id="MJXp-Span-2298"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2299" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2300" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-2301" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-msub" id="MJXp-Span-2302"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2303" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2304" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-2305" style="margin-left: 0em; margin-right: 0em; vertical-align: -0.244em;"><span class="MJXp-right MJXp-scale7" style="font-size: 1.978em; margin-left: -0.05em;">)</span></span></span><span class="MJXp-mo" id="MJXp-Span-2306" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-2307">70</span><span class="MJXp-mo" id="MJXp-Span-2308" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mrow" id="MJXp-Span-2309"><span class="MJXp-mo" id="MJXp-Span-2310" style="margin-left: 0em; margin-right: 0em;">(</span><span class="MJXp-mn" id="MJXp-Span-2311">10</span><span class="MJXp-mo" id="MJXp-Span-2312" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-mn" id="MJXp-Span-2313">8</span><span class="MJXp-mo" id="MJXp-Span-2314" style="margin-left: 0em; margin-right: 0em;">)</span></span><span class="MJXp-mo" id="MJXp-Span-2315" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mstyle" id="MJXp-Span-2316" style="color: blue;"><span class="MJXp-mrow" id="MJXp-Span-2317"><span class="MJXp-mn" id="MJXp-Span-2318">52</span></span></span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-249">6. d_33 = c_33 - (u_3 + v_3) = 70 - (10 +8) = color{blue}{52} </script><br><br>
        <table border="1" cellspacing="0" cellpadding="6" style="border-collapse:collapse;">
            <tbody>
                <tr align="left">
                    <td nowrap=""> </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-250-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2319"><span class="MJXp-mstyle" id="MJXp-Span-2320"><span class="MJXp-msub" id="MJXp-Span-2321"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2322" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2323" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-250">D_1</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-251-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2324"><span class="MJXp-mstyle" id="MJXp-Span-2325"><span class="MJXp-msub" id="MJXp-Span-2326"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2327" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2328" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-251">D_2</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-252-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2329"><span class="MJXp-mstyle" id="MJXp-Span-2330"><span class="MJXp-msub" id="MJXp-Span-2331"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2332" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2333" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-252">D_3</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-253-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2334"><span class="MJXp-mstyle" id="MJXp-Span-2335"><span class="MJXp-msub" id="MJXp-Span-2336"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2337" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2338" style="vertical-align: -0.4em;">4</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-253">D_4</script>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">Supply</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-254-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2339"><span class="MJXp-mstyle" id="MJXp-Span-2340"><span class="MJXp-msub" id="MJXp-Span-2341"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2342" style="margin-right: 0.05em;">u</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-2343" style="vertical-align: -0.4em;">i</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-254">u_i</script>
                    </td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-255-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2344"><span class="MJXp-mstyle" id="MJXp-Span-2345"><span class="MJXp-msub" id="MJXp-Span-2346"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2347" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2348" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-255">S_1</script>
                    </td>
                    <td nowrap="">19 <font color="red"><b>(5)</b></font>
                    </td>
                    <td nowrap="">30 <font color="blue">[32]</font>
                    </td>
                    <td nowrap="">50 <font color="blue">[42]</font>
                    </td>
                    <td nowrap="">10 <font color="red"><b>(2)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">7</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-256-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2349"><span class="MJXp-mstyle" id="MJXp-Span-2350"><span class="MJXp-msub" id="MJXp-Span-2351"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2352" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2353" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-2354" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-2355">0</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-256">u_1=0</script>
                    </td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-257-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2356"><span class="MJXp-mstyle" id="MJXp-Span-2357"><span class="MJXp-msub" id="MJXp-Span-2358"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2359" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2360" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-257">S_2</script>
                    </td>
                    <td nowrap="">70 <font color="blue">[19]</font>
                    </td>
                    <td nowrap="">30 <font color="red"><b>(2)</b></font>
                    </td>
                    <td nowrap="">40 <font color="red"><b>(7)</b></font>
                    </td>
                    <td nowrap="">60 <font color="blue">[18]</font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">9</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-258-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2361"><span class="MJXp-mstyle" id="MJXp-Span-2362"><span class="MJXp-msub" id="MJXp-Span-2363"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2364" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2365" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-2366" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-2367">32</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-258">u_2=32</script>
                    </td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-259-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2368"><span class="MJXp-mstyle" id="MJXp-Span-2369"><span class="MJXp-msub" id="MJXp-Span-2370"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2371" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2372" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-259">S_3</script>
                    </td>
                    <td nowrap="">40 <font color="blue">[11]</font>
                    </td>
                    <td nowrap="">8 <font color="red"><b>(6)</b></font>
                    </td>
                    <td nowrap="">70 <font color="blue">[52]</font>
                    </td>
                    <td nowrap="">20 <font color="red"><b>(12)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">18</td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-260-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2373"><span class="MJXp-mstyle" id="MJXp-Span-2374"><span class="MJXp-msub" id="MJXp-Span-2375"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2376" style="margin-right: 0.05em;">u</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2377" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-2378" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-2379">10</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-260">u_3=10</script>
                    </td>
                </tr>
                <tr align="left">
                    <td nowrap="" style="padding: 1px;" colspan="8"> </td>
                </tr>
                <tr align="left">
                    <td nowrap="">Demand</td>
                    <td nowrap="">5</td>
                    <td nowrap="">8</td>
                    <td nowrap="">7</td>
                    <td nowrap="">14</td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap=""></td>
                    <td nowrap=""></td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-261-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2380"><span class="MJXp-mstyle" id="MJXp-Span-2381"><span class="MJXp-msub" id="MJXp-Span-2382"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2383" style="margin-right: 0.05em;">v</span><span class="MJXp-mi MJXp-italic MJXp-script" id="MJXp-Span-2384" style="vertical-align: -0.4em;">j</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-261">v_j</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-262-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2385"><span class="MJXp-mstyle" id="MJXp-Span-2386"><span class="MJXp-msub" id="MJXp-Span-2387"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2388" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2389" style="vertical-align: -0.4em;">1</span></span><span class="MJXp-mo" id="MJXp-Span-2390" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-2391">19</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-262">v_1=19</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-263-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2392"><span class="MJXp-mstyle" id="MJXp-Span-2393"><span class="MJXp-msub" id="MJXp-Span-2394"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2395" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2396" style="vertical-align: -0.4em;">2</span></span><span class="MJXp-mo" id="MJXp-Span-2397" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mo" id="MJXp-Span-2398" style="margin-left: 0.267em; margin-right: 0.267em;">-</span><span class="MJXp-mn" id="MJXp-Span-2399">2</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-263">v_2=-2</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-264-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2400"><span class="MJXp-mstyle" id="MJXp-Span-2401"><span class="MJXp-msub" id="MJXp-Span-2402"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2403" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2404" style="vertical-align: -0.4em;">3</span></span><span class="MJXp-mo" id="MJXp-Span-2405" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-2406">8</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-264">v_3=8</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-265-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2407"><span class="MJXp-mstyle" id="MJXp-Span-2408"><span class="MJXp-msub" id="MJXp-Span-2409"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2410" style="margin-right: 0.05em;">v</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2411" style="vertical-align: -0.4em;">4</span></span><span class="MJXp-mo" id="MJXp-Span-2412" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-2413">10</span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-265">v_4=10</script>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap=""></td>
                    <td nowrap=""></td>
                </tr>
            </tbody>
        </table><br><br>Since all <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-266-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2414"><span class="MJXp-mstyle" id="MJXp-Span-2415"><span class="MJXp-msub" id="MJXp-Span-2416"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2417" style="margin-right: 0.05em;">d</span><span class="MJXp-mrow MJXp-script" id="MJXp-Span-2418" style="vertical-align: -0.4em;"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2419">i</span><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2420">j</span></span></span><span class="MJXp-mo" id="MJXp-Span-2421" style="margin-left: 0.333em; margin-right: 0.333em;">≥</span><span class="MJXp-mn" id="MJXp-Span-2422">0</span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-266">d_(ij)>=0</script>.<br><br>So final optimal solution is arrived.<br>
        <table border="1" cellspacing="0" cellpadding="6" style="border-collapse:collapse;">
            <tbody>
                <tr align="left">
                    <td nowrap=""> </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-267-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2423"><span class="MJXp-mstyle" id="MJXp-Span-2424"><span class="MJXp-msub" id="MJXp-Span-2425"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2426" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2427" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-267">D_1</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-268-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2428"><span class="MJXp-mstyle" id="MJXp-Span-2429"><span class="MJXp-msub" id="MJXp-Span-2430"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2431" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2432" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-268">D_2</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-269-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2433"><span class="MJXp-mstyle" id="MJXp-Span-2434"><span class="MJXp-msub" id="MJXp-Span-2435"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2436" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2437" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-269">D_3</script>
                    </td>
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-270-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2438"><span class="MJXp-mstyle" id="MJXp-Span-2439"><span class="MJXp-msub" id="MJXp-Span-2440"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2441" style="margin-right: 0.05em;">D</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2442" style="vertical-align: -0.4em;">4</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-270">D_4</script>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">Supply</td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-271-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2443"><span class="MJXp-mstyle" id="MJXp-Span-2444"><span class="MJXp-msub" id="MJXp-Span-2445"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2446" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2447" style="vertical-align: -0.4em;">1</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-271">S_1</script>
                    </td>
                    <td nowrap="">19 <font color="red"><b>(5)</b></font>
                    </td>
                    <td nowrap="">30 </td>
                    <td nowrap="">50 </td>
                    <td nowrap="">10 <font color="red"><b>(2)</b></font>
                    </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">7</td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-272-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2448"><span class="MJXp-mstyle" id="MJXp-Span-2449"><span class="MJXp-msub" id="MJXp-Span-2450"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2451" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2452" style="vertical-align: -0.4em;">2</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-272">S_2</script>
                    </td>
                    <td nowrap="">70 </td>
                    <td nowrap="">30 <font color="red"><b>(2)</b></font>
                    </td>
                    <td nowrap="">40 <font color="red"><b>(7)</b></font>
                    </td>
                    <td nowrap="">60 </td>
                    <td nowrap="" style="padding: 1px;"></td>
                    <td nowrap="">9</td>
                </tr>
                <tr align="left">
                    <td nowrap=""><span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-273-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2453"><span class="MJXp-mstyle" id="MJXp-Span-2454"><span class="MJXp-msub" id="MJXp-Span-2455"><span class="MJXp-mi MJXp-italic" id="MJXp-Span-2456" style="margin-right: 0.05em;">S</span><span class="MJXp-mn MJXp-script" id="MJXp-Span-2457" style="vertical-align: -0.4em;">3</span></span></span></span></span>
                        <script type="math/asciimath" id="MathJax-Element-273">S_3</script>
                    </td>
                    <td nowrap="">40 </td>
                    <td nowrap="">8 <font color="red"><b>(6)</b></font>
                    </td>
                    <td nowrap="">70 </td>
                    <td nowrap="">20 <font color="red"><b>(12)</b></font>
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
        <br><br>The minimum total transportation cost <span class="MathJax_Preview" style="display: none;"></span><span class="MathJax_PHTML" id="MathJax-Element-274-Frame" tabindex="0"><span class="MJXp-math" id="MJXp-Span-2458"><span class="MJXp-mstyle" id="MJXp-Span-2459"><span class="MJXp-mo" id="MJXp-Span-2460" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-2461">19</span><span class="MJXp-mo" id="MJXp-Span-2462" style="margin-left: 0.267em; margin-right: 0.267em;">×</span><span class="MJXp-mn" id="MJXp-Span-2463">5</span><span class="MJXp-mo" id="MJXp-Span-2464" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-mn" id="MJXp-Span-2465">10</span><span class="MJXp-mo" id="MJXp-Span-2466" style="margin-left: 0.267em; margin-right: 0.267em;">×</span><span class="MJXp-mn" id="MJXp-Span-2467">2</span><span class="MJXp-mo" id="MJXp-Span-2468" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-mn" id="MJXp-Span-2469">30</span><span class="MJXp-mo" id="MJXp-Span-2470" style="margin-left: 0.267em; margin-right: 0.267em;">×</span><span class="MJXp-mn" id="MJXp-Span-2471">2</span><span class="MJXp-mo" id="MJXp-Span-2472" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-mn" id="MJXp-Span-2473">40</span><span class="MJXp-mo" id="MJXp-Span-2474" style="margin-left: 0.267em; margin-right: 0.267em;">×</span><span class="MJXp-mn" id="MJXp-Span-2475">7</span><span class="MJXp-mo" id="MJXp-Span-2476" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-mn" id="MJXp-Span-2477">8</span><span class="MJXp-mo" id="MJXp-Span-2478" style="margin-left: 0.267em; margin-right: 0.267em;">×</span><span class="MJXp-mn" id="MJXp-Span-2479">6</span><span class="MJXp-mo" id="MJXp-Span-2480" style="margin-left: 0.267em; margin-right: 0.267em;">+</span><span class="MJXp-mn" id="MJXp-Span-2481">20</span><span class="MJXp-mo" id="MJXp-Span-2482" style="margin-left: 0.267em; margin-right: 0.267em;">×</span><span class="MJXp-mn" id="MJXp-Span-2483">12</span><span class="MJXp-mo" id="MJXp-Span-2484" style="margin-left: 0.333em; margin-right: 0.333em;">=</span><span class="MJXp-mn" id="MJXp-Span-2485">743</span></span></span></span>
        <script type="math/asciimath" id="MathJax-Element-274">= 19 xx 5 + 10 xx 2 + 30 xx 2 + 40 xx 7 + 8 xx 6 + 20 xx 12 = 743</script>
        <br>
        <hr>
        <br>
        <br>
    </span>
</div>
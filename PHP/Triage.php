<link href="../CSS/cssEthics_Application.css" rel="stylesheet" type="text/css">
<p>According to section 5.1.6 (b) of the National Statement if your study involves any of the following groups the project MUST be reviewed by the HREC.<br /><br /></p>
    <table width="800" border="1">
      <tr>
        <td>
            <h4>Does the study include any of the ten following types of research and/or participants?</h4>
        </td>
        <td>
            <div id="formCheckBox">
                <h4>No</h4>
            </div>
        </td>
        <td>
            <div id="formCheckBox">
                <h4>Yes</h4>
            </div>
        </td>
      </tr>
      <tr>
        <td>
            <?php if ($processMeth == 'submit') {echo "<h4>*</h4>";} ?><p>Interventions and therapies, including clinical and non-clinical trials</p>
        </td>
        <td>
            <div id="formCheckBox">
              <input type="radio" name="Triage01" value="No" id="Triage01_no" />
            </div>
        </td>
        <td>
            <div id="formCheckBox">
              <input type="radio" name="Triage01" value="Yes" id="Triage01_yes" />
            </div>
        </td>
      </tr>
      <tr>
        <td>
            <p>Human genetics</p>
        </td>
        <td>
            <div id="formCheckBox">
              <input type="radio" name="Triage02" value="No" id="Triage02_no" />
            </div>
        </td>
        <td>
            <div id="formCheckBox">
              <input type="radio" name="Triage02" value="Yes" id="Triage02_yes" />
            </div>
        </td>
      </tr>
      <tr>
        <td>
            <p>Women who are pregnant and/or the human fetus</p>
        </td>
        <td>
            <div id="formCheckBox">
              <input type="radio" name="Triage03" value="No" id="Triage03_no" />
            </div>
        </td>
        <td>
            <div id="formCheckBox">
              <input type="radio" name="Triage03" value="Yes" id="Triage03_yes" />
            </div>
        </td>
      </tr>
      <tr>
        <td>
            <p>People who are highly dependent on medical care who may be unable to give consent</p>
        </td>
        <td>
            <div id="formCheckBox">
              <input type="radio" name="Triage04" value="No" id="Triage04_no" />
            </div>
        </td>
        <td>
            <div id="formCheckBox">
              <input type="radio" name="Triage04" value="Yes" id="Triage04_yes" />
            </div>
        </td>
      </tr>
      <tr>
        <td>
            <p>People with a cognitive impairment, intellectual disability or a mental illness</p>
        </td>
        <td>
            <div id="formCheckBox">
              <input type="radio" name="Triage05" value="No" id="Triage05_no" />
            </div>
        </td>
        <td>
            <div id="formCheckBox">
              <input type="radio" name="Triage05" value="Yes" id="Triage05_yes" />
            </div>
        </td>
      </tr>
      <tr>
        <td>
            <p>Research specifically targeting Aboriginal or Torres Strait Islanders</p>
        </td>
        <td>
            <div id="formCheckBox">
              <input type="radio" name="Triage06" value="No" id="Triage06_no" />
            </div>
        </td>
        <td>
            <div id="formCheckBox">
              <input type="radio" name="Triage06" value="Yes" id="Triage06_yes" />
            </div>
        </td>
      </tr>
      <tr>
        <td>
            <p>People who may be involved in illegal activities</p>
        </td>
        <td>
            <div id="formCheckBox">
              <input type="radio" name="Triage07" value="No" id="Triage07_no" />
            </div>
        </td>
        <td>
            <div id="formCheckBox">
              <input type="radio" name="Triage07" value="Yes" id="Triage07_yes" />
            </div>
        </td>
      </tr>
    </table>
    <p><br />A "yes" response to any of the above questions would normally indicate your project is not eligible for a Low or Negligible Risk review. However, a "Yes" answer does not necessarily, automatically, preclude the research from being reviewed through a low risk review process. If you answered "yes" to any of the above questions and you think your study should be reviewed through the low risk process please justify why in the space below.</p>
    <textarea name="TriageJustify" cols="205" rows="7"></textarea>
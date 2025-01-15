<form>
    <fieldset class="sq-form-section">
        <legend class="sq-form-section-title">Contact us today</legend>
        <div class="row">
            <div class="col-auto">
                <div class="sq-form-question">
                    <label class="sq-form-question-title" for="role">I am a... (optional)</label>
                    <em class="sq-form-question-note"><a href="#" data-bs-toggle="tooltip" data-bs-title="Help text"><i class="fa-solid fa-circle-question"></i></a></em>
                    <div class="sq-form-question-answer">
                        <select class="sq-form-field" name="role" id="role">
                            <option value="none">Select an option</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <div class="sq-form-question">
                    <label class="sq-form-question-title" for="interest">I'm interested in... (optional)</label>
                    <em class="sq-form-question-note"><a href="#" data-bs-toggle="tooltip" data-bs-title="Help text"><i class="fa-solid fa-circle-question"></i></a></em>
                    <div class="sq-form-question-answer">
                        <select class="sq-form-field" name="interest" id="interest" multiple>
                            <option value="none">Select an option</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="sq-form-question">
            <label class="sq-form-question-title" for="message">Message</label>
            <em class="sq-form-question-note"><a href="#" data-bs-toggle="tooltip" data-bs-title="Help text"><i class="fa-solid fa-circle-question"></i></a></em>
            <div class="sq-form-question-answer">
                <textarea class="sq-form-field" name="message" id="message" placeholder="Write a message"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-auto">
                <div class="sq-form-question">
                    <label class="sq-form-question-title" for="fname">First name</label>
                    <div class="sq-form-question-answer">
                        <input class="sq-form-field" type="text" name="fname" id="fname" placeholder="First name">
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <div class="sq-form-question">
                    <label class="sq-form-question-title" for="lname">Last name</label>
                    <div class="sq-form-question-answer">
                        <input class="sq-form-field" type="text" name="lname" id="lname" placeholder="Last name">
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <div class="sq-form-question">
                    <label class="sq-form-question-title" for="email">Email</label>
                    <div class="sq-form-question-answer">
                        <input class="sq-form-field" type="text" name="email" id="email" placeholder="Email">
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <div class="sq-form-question">
                    <label class="sq-form-question-title" for="phone">Phone number</label>
                    <div class="sq-form-question-answer">
                        <input class="sq-form-field" type="text" name="phone" id="phone" placeholder="Phone number">
                    </div>
                </div>
            </div>
        </div>
    </fieldset>

    <fieldset class="sq-form-section">
        <legend class="sq-form-section-title">Radios</legend>
        <div class="sq-form-question sq-form-question-option-list">
            <fieldset>
                <legend class="sq-form-question-title">Radio Label <abbr class="sq-form-required-field" title="required">*</abbr></legend>
                <div class="sq-form-question-answer">
                    <ul>
                        <li><input type="radio" name="q990965:q1" id="q990965_q1_0" value="0" class="sq-form-field" />
                            <label for="q990965_q1_0">Option 1</label>
                        </li>
                        <li><input type="radio" name="q990965:q1" id="q990965_q1_1" value="1" class="sq-form-field" />
                            <label for="q990965_q1_1">Option 2</label>
                        </li>
                        <li><input type="radio" name="q990965:q1" id="q990965_q1_2" value="2" class="sq-form-field" />
                            <label for="q990965_q1_2">Option 3</label>
                        </li>
                        <li><input type="radio" name="q990965:q1" id="q990965_q1_3" value="3" class="sq-form-field" />
                            <label for="q990965_q1_3">Option 4</label>
                        </li>
                    </ul>
                </div>
            </fieldset>
        </div>
    </fieldset>

    <fieldset class="sq-form-section">
        <legend class="sq-form-section-title">Checkboxes</legend>
        <div class="sq-form-question sq-form-question-tickbox-list">
            <fieldset>
                <legend class="sq-form-question-title">Checkbox Label <abbr class="sq-form-required-field" title="required">*</abbr></legend>

                <div class="sq-form-question-answer">
                    <ul>
                        <li><input type="checkbox" name="q990965:q2" id="q990965_q2_0" value="0" class="sq-form-field" />
                            <label for="q990965_q2_0">Option 1</label>
                        </li>
                        <li><input type="checkbox" name="q990965:q2" id="q990965_q2_1" value="1" class="sq-form-field" />
                            <label for="q990965_q2_1">Option 2</label>
                        </li>
                        <li><input type="checkbox" name="q990965:q2" id="q990965_q2_2" value="2" class="sq-form-field" />
                            <label for="q990965_q2_2">Option 3</label>
                        </li>
                        <li><input type="checkbox" name="q990965:q2" id="q990965_q2_3" value="3" class="sq-form-field" />
                            <label for="q990965_q2_3">Option 4</label>
                        </li>
                    </ul>
                </div>
            </fieldset>
        </div>
    </fieldset>

    <div class="sq-form-control">
        <input class="sq-form-submit" type="submit" name="submit" id="submit" value="Submit">
    </div>
</form>
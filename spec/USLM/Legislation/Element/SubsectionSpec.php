<?php

namespace spec\USLM\Legislation\Element;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SubsectionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('USLM\Legislation\Element\Subsection');
    }

    function it_should_return_markdown_with_toc() {
      $raw = '<subsection id="HCA2DE76583DC42EAB385CAAFCEFCF19B">
                <enum>(b)</enum>
                <header>Table of contents</header>
                <text>The table of contents of this Act is as follows:</text>
                <toc container-level="legis-body-container" lowest-bolded-level="division-lowest-bolded" lowest-level="section" quoted-block="no-quoted-block" regeneration="yes-regeneration">
                  <toc-entry idref="HF6D596DF22CB431F80ECCA4CB3B16FEE" level="section">Sec.&#x2002;1.&#x2002;Short title; table of contents.</toc-entry>
                  <toc-entry idref="H39793831BEBD41BD838B9C312A2577CC" level="title">Title I&#x2014;Prohibiting Federally Funded Abortions</toc-entry>
                  <toc-entry idref="H4CBE34ECBC7149C8BC3D05FD9AD1F5AD" level="section">Sec.&#x2002;101.&#x2002;Prohibiting taxpayer funded abortions.</toc-entry>
                  <toc-entry idref="H2F7B8EEEFB1F4AB7BE386EE658631F19" level="section">Sec.&#x2002;102.&#x2002;Amendment to table of chapters.</toc-entry>
                  <toc-entry idref="H782CF7E77A584C59A4F60B6F02F635B1" level="title">Title II&#x2014;Application under the Affordable Care Act</toc-entry>
                  <toc-entry idref="H779D8C43A9494D9E8AC418C8AB677017" level="section">Sec.&#x2002;201.&#x2002;Clarifying application of prohibition to premium credits and cost-sharing reductions under ACA.</toc-entry>
                  <toc-entry idref="HD8ED2B34EECD4E3C90B66FEBFE02AE82" level="section">Sec.&#x2002;202.&#x2002;Revision of notice requirements regarding disclosure of extent of health plan coverage of abortion and abortion premium surcharges.</toc-entry>
                </toc>
              </subsection>';

      $simplexml = simplexml_load_string($raw);
      $this->simplexml($simplexml);

      $this->asMarkdown()->shouldBeString();
    }
}

function addClickListener() {
  // 各要素にアクセスする
  ['periodic_table_main', 'periodic_table_sub'].forEach((cssClass) => {
    document.querySelectorAll(`#${cssClass} > tbody > tr > td:not(:first-child)`).forEach((td) => {
      const elmAtomNum = td.querySelector('span:nth-child(1)');
      const elmAtomSymbol = td.querySelector('span:nth-child(2)');
      const elmAtomName = td.querySelector('span:nth-child(3)');
      const elmAtomWt = td.querySelector('span:nth-child(4)');

      // 元素名を取得する
      let atomName = '';
      if (elmAtomName === null)
        return;
      atomName = elmAtomName?.textContent;

      // URL
      const url = 'https://ja.wikipedia.org/wiki/' + encodeURIComponent(atomName);

      // 「原子番号」「元素記号」「元素名」「原子量」に click イベントリスナーを追加する。
      [elmAtomNum, elmAtomSymbol, elmAtomName, elmAtomWt].forEach((e) => {
        e.style.cursor = 'pointer';
        e.addEventListener('click', () => { window.open(url, '_blank').focus(); });
      });
    });
  });
}

export default {
  addClickListener
}

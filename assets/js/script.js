function calculateZakatMal() {
    const wealth = parseFloat(document.getElementById('wealth').value);
    const nisabInput = document.getElementById('nisab').value;
    const nisab = nisabInput ? parseFloat(nisabInput) : 0;
    const resultDiv = document.getElementById('resultZakatMal');
    
    if (isNaN(wealth) || wealth <= 0) {
      resultDiv.innerHTML = '<div class="alert alert-danger">Masukkan jumlah harta yang valid.</div>';
      return;
    }
    
    if (nisab > 0 && wealth < nisab) {
      resultDiv.innerHTML = '<div class="alert alert-info">Harta Anda belum mencapai nisab. Zakat tidak wajib.</div>';
      return;
    }
    
    const zakat = wealth * 0.025;
    resultDiv.innerHTML = '<div class="alert alert-success">Jumlah Zakat yang harus dibayarkan: Rp ' + zakat.toLocaleString('id-ID') + '</div>';
  }
  
  function calculateZakatFitrah() {
    const people = parseInt(document.getElementById('people').value);
    const costPerPerson = parseFloat(document.getElementById('costPerPerson').value);
    const resultDiv = document.getElementById('resultZakatFitrah');
    
    if (isNaN(people) || people <= 0 || isNaN(costPerPerson) || costPerPerson <= 0) {
      resultDiv.innerHTML = '<div class="alert alert-danger">Masukkan jumlah orang dan biaya per orang yang valid.</div>';
      return;
    }
    
    const zakatFitrah = people * costPerPerson;
    resultDiv.innerHTML = '<div class="alert alert-success">Total Zakat Fitrah yang harus dibayarkan: Rp ' + zakatFitrah.toLocaleString('id-ID') + '</div>';
  }
  
  function calculateZakatPertanian() {
    const produce = parseFloat(document.getElementById('produce').value);
    const percentage = parseFloat(document.getElementById('irrigation').value);
    const resultDiv = document.getElementById('resultZakatPertanian');
    
    if (isNaN(produce) || produce <= 0) {
      resultDiv.innerHTML = '<div class="alert alert-danger">Masukkan jumlah hasil pertanian yang valid.</div>';
      return;
    }
    
    const zakatPertanian = produce * (percentage / 100);
    resultDiv.innerHTML = '<div class="alert alert-success">Jumlah Zakat Pertanian yang harus dibayarkan: ' + zakatPertanian.toFixed(2) + ' Kg</div>';
  }
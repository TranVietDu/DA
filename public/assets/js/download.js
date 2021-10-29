window.onload = function(){
    document.getElementById("download").addEventListener("click",()=>{
        const content1 = this.document.getElementById("content1");
        html2pdf().from(content1).save();
    })
}

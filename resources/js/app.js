window.addEventListener('load', function () {
  for(let el of document.querySelectorAll('[name="post_type"][value="properties"]')){
    el.remove()
  }
});


window.addEventListener("scroll", (e) => {
  let bg = document.querySelector('#bg')
  if(bg){
    let c = [bg.getAttribute('bg1'), bg.getAttribute('bg2')]
    if(window.scrollY > 500) {
      bg.classList.remove(c[0])
      bg.classList.add(c[1])
    } else {
      bg.classList.remove(c[1])
      bg.classList.add(c[0])
    }
  }

  // counters
  if(!window.counting){
    window.counting = true
    let countInterval = setInterval(() => {
      let remaining = [...document.querySelectorAll('.counter')].map(el => {
        let [n, target] = [el.innerText, el.getAttribute('data-target')].map(Number)
        if(n !== target){
          el.innerText = Math.max(n + 1, n + (Math.round(target / 25)))
          return true
        }
      })
      if(!remaining.find(Boolean)) clearInterval(countInterval)
    }, 50)
  }
});

